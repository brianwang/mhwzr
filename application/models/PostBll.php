<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostBLL
 *
 * @author brian
 */
class PostBll extends BaseBll {

    public function create($data = array()) {
        $sql = 'insert into posts(';
        $values = '';
        foreach ($data as $key => $v) {
            $sql.= $key . ',';
            if (is_string($v)) {
                $values .= "'" . $v . "',";
            } else {
                $values .= $v . ',';
            }
        }
        $sql = substr($sql, 0, str_len($sql) - 1);
        $values = \substr($values, 0, str_len($values) - 1);
        $sql = $sql . ') values(' . $values . ')';
        echo $sql;
        $result = $this->query($sql);
        return $result;
    }

    function addcomment($postid, $parentid, $content) {
        $result = PostModel::find(array('id' => $postid))->to_array();
        if ($result != null) {
            $data = array(
                'content' => $content,
                'create_time' => new ActiveRecord\DateTime(),
                'parent_id' => $parentid,
                'post_id' => $postid,
                'uid' => $_SESSION['user']['id'],
                'username' => $_SESSION['user']['username']);
            PostCommentModel::create($data);
            return $data;
        } else {
            return null;
        }
    }

    function getcomments($id = '') {
        if ($id == '') {
            return array();
        } else {
            $result = PostCommentModel::find('all', array('post_id' => $id, 'parent_id' => -1));
            if ($result != null) {
                $comments = array();
                foreach ($result as $r) {
                    array_push($comments, $r->to_array());
                }

                foreach ($comments as &$c) {
                    $child = PostCommentModel::find('all', array('post_id' => $id, 'parent_id' => $c['id']));
                    if (!empty($child)) {
                        $ccoms = array();
                        foreach ($child as $c1) {
                            array_push($ccoms, $c1->to_array());
                        }
                        $c['comments'] = $ccoms;
                    } else {
                        $c['comments'] = array();
                    }
                }
                return $comments;
            }
        }
    }

//今日寻人
    function gettoday() {
        $now = date('Y-m-d', time());
        $posts = PostModel::find('all', array('order' => 'create_time desc', 'limit' => 4,
                    'conditions' => 'create_time >= \'' . $now . '\''));
        if ($posts == nULL) {
            return array();
        } else {
            return $this->to_array($posts);
        }
    }

    function gettop4() {
        $posts = PostModel::find('all', array('order' => 'create_time desc', 'limit' => 4));
        if ($posts == nULL) {
            return array();
        } else {
            $result = array();
            foreach ($posts as $post) {
                array_push($result, $post->to_array());
            }
            return $result;
        }
    }

    function getpages() {
        $pages = intval(PostModel::count() / 10) + 1;
        return $pages;
    }

    function apply($postid, $uid, $nickname, $time, $status) {
        $result = PostApplyModel::find(array('apply_uid' => $uid, 'postid' => $postid, 'status' => '申请中'));
        if ($result != null) {
            return false;
        } else {
            $data = array('postid' => $postid, 'apply_uid' => $uid,
                'apply_username' => $nickname, 'apply_time' => $time, 'status' => $status);
            PostApplyModel::create($data)->save();
        }
        return $data;
    }

    function getitems($page = 1, $pagesize = 10, $status = '进行中') {
        try {
            if ($page == 0)
                $page = 1;
            $conditions = array();
            foreach ($_GET as $key => $v) {
                $conditions[$key] = $v;
            }
            $posts = PostModel::find('all', array(
                        'conditions' => array('status=? ', $status),
                        'order' => 'create_time desc', 'limit' => $pagesize,
                        'offset' => ($page - 1) * $pagesize));
//var_dump(PostModel::connection()->last_query);
//var_dump(PostModel::connection()->last_query);
        } catch (Exception $e) {
            
        }

        if ($posts == nULL) {
            return array();
        } else {
            $result = array();
            foreach ($posts as $post) {
                array_push($result, $post->to_array());
            }
            return $result;
        }
    }

    public function search($key = '', $page = 1, $pagesize = 10) {
        if ($key == '') {
            $posts = PostModel::find('all', array('limit' => $pagesize,
                        'offset' => ($page - 1) * $pagesize));
        } else {
            try {
                $posts = PostModel::find('all', array(
                            'conditions' => array('title like \'%' . $key . '%\' or description like \'%' . $key . '%\' OR name like \'%' . $key . '%\''),
                            'order' => 'create_time desc', 'limit' => $pagesize,
                            'offset' => ($page - 1) * $pagesize));
            } catch (Exception $e) {
                
            }
//var_dump(PostModel::connection()->last_query);
        }
        return $this->to_array($posts);
    }

    public function getbyuid($uid = '', $page = 1, $pagesize = 10) {
        if ($uid == '')
            return array();
        $result = PostModel::find('all', array('conditions' => array('uid=?', $uid),
                    'limit' => $pagesize,
                    'offset' => ($page - 1) * $pagesize));
        $count = PostModel::count(array('conditions' => array('uid=?', $uid)));
        $data = $this->to_array($result);
        return array('data' => $data, 'recordsTotal' => $count, 'recordsFiltered' => $count);
    }

    public function getapplybyuid($uid = '', $page = 1, $pagesize = 10) {
        if ($uid == '') {
            return array('data' => array(), 'recordsTotal' => 0, 'recordsFiltered' => 0);
        }
        $join = 'JOIN users u ON(u.id= post_apply.apply_uid) JOIN posts p on (p.id=post_apply.postid)';
        $result = PostApplyModel::find('all', array('joins' => $join,
                    'select' => 'u.headurl,post_apply.*,p.*', 'conditions' => array('apply_uid=?', $uid)));
        $count = PostApplyModel::count(array('conditions' => array('apply_uid=?', $uid)));
        $data = $this->to_array($result);
        return array('data' => $data, 'recordsTotal' => $count, 'recordsFiltered' => $count);
    }

    public function getapplies($postid) {
        $join = 'JOIN users u ON(u.id= post_apply.apply_uid)';
        $result = PostApplyModel::find('all', array('joins' => $join,
                    'select' => 'u.headurl,post_apply.*', 'conditions' => array('postid=?', $postid)));
        return $this->to_array($result);
    }

    public function agree($uid, $postid, $status) {
        $post = PostModel::find(array('id' => $postid));
        if ($post != null) {
            $user = UserModel::find(array('id' => $uid));
            if ($user != null) {
                $applypost = PostApplyModel::find(array('postid' => $postid,
                            'apply_uid' => $uid));
                if ($applypost != null) {
                    if ($applypost->status != $status) {
                        $applypost->status = $status;
                        $applypost->save();
                        return array('result' => 'success', 'message' => '成功');
                    } else {
                        return array('result' => 'error', 'message' => '已经处理');
                    }
                } else {
                    return array('result' => 'error', 'message' => '申请不存在');
                }
            } else {
                return array('result' => 'error', 'message' => '用户不存在');
            }
        } else {
            return array('result' => 'error', 'message' => 'post 不存在');
        }
    }

}
