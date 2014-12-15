<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of post
 *
 * @author brian
 */
class post extends Controller {

    //保存
    function save() {
        if (isset($_SESSION['postphrase'])) {
            if ($_SESSION['postphrase'] == $_POST['postverify']) {
                $post = $_POST;
                if (!isset($post['id'])) {
                    $post['id'] = genid();
                }
                if (count($_FILES) > 0) {
                    if ($_FILES['identity']['error'] == 0) {
                        $file = $_FILES['identity']['tmp_name'];
                        $fileext = $_FILES['identity']['type'];
                        $ext = '';
                        switch ($fileext) {
                            case "image/jpeg":
                                $ext = 'jpg';
                                break;
                            case "image/png":
                                $ext = 'png';
                                break;
                            case "image/gif":
                                $ext = 'gif';
                                break;
                        }
                        $fileid = uniqid();
                        $fileurl = '/uploads/' . $fileid . '.' . $ext;
                        $filename = ROOT_DIR . 'uploads/' . $fileid . '.' . $ext;
                        //echo $filename;
                        $post['imgurl'] = $fileurl;
                        move_uploaded_file($file, $filename);
                    }
                }
                //$duration = date_diff(new DateTime(), new DateTime($post['birthday']));
                //$post['age'] = $duration->y;
                unset($post['postverify']);
                if (isset($post['posttype']) && $post['posttype'] == 't') {
                    unset($post['province']);
                    unset($post['city']);
                    unset($post['area']);
                    unset($post['type']);
                }
                //$post['creator'] = $creator;
                //$post['creator_name'] = $username;
                if (isset($_POST['id'])) {
                    PostModel::table()->update($post, array('id' => $_POST['id']));
                } else {
                    PostModel::create($post);
                }
            } else {
                
            }
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    function my() {
        if (isset($_SESSION['user'])) {
            $uid = $_SESSION['user']['id'];
            $postbll = new PostBll();
            $page = isset($_GET['start']) ? $_GET['start'] : 1;
            $pagesize = isset($_GET['length']) ? $_GET['length'] : 10;
            $page = intval($page / $pagesize) + 1;
            $columns = $_GET['columns'];
            $orders = $_GET['order'];
            $filters = array();
            $orderby = '';
            foreach ($orders as $order) {
                $orderby .= $columns[$order['column']]['data'] . ' ' . $order['dir'];
            }
            $filters['order'] = $orderby;
            $search = '';
            if (isset($_GET['search']) && $_GET['search']['value'] != '') {
                for ($i = 0; $i < count($columns); $i++) {
                    $search .=$columns[$i]['data'] . ' like %' . $_GET['search']['value'] . '%';
                    if ($i != count($columns) - 1) {
                        $search .=' and ';
                    }
                }
            }
            if ($search != '') {
                $filters['conditions'] = array('uid=? and ' . $search, $uid);
            } else {
                $filters['conditions'] = array('uid=?', $uid);
            }
            $filters['limit'] = $_GET['length'];
            $filters['offset'] = $_GET['start'];
            $result = $postbll->filter($filters);
            /// $postbll->getbyuid($uid, $page, $pagesize);
            $totalcount = $this->view->json($result);
        } else {
            $this->view->json(array());
        }
    }

    function myapply() {
        if (isset($_SESSION['user'])) {
            $uid = $_SESSION['user']['id'];
            $postbll = new PostBll();
            $page = isset($_GET['start']) ? $_GET['start'] : 1;
            $pagesize = isset($_GET['length']) ? $_GET['length'] : 10;
            $page = intval($page / $pagesize) + 1;
            $result = $postbll->getapplybyuid($uid, $page, $pagesize);
            $totalcount = $this->view->json($result);
        } else {
            $this->view->json(array());
        }
    }

    function index($id = '') {
        if ($id == '') {
            $this->show_404();
        } else {
            $post = PostModel::find(array('id' => $id));
            $postdata = $post->to_array(array('include' => 'comments'));
            $postbll = new PostBll();
            $applyusers = $postbll->getapplies($id);
            $data['post'] = $postdata;
            $data['applyusers'] = $applyusers;
            $comments = $postbll->getcomments($id);
            $data['comments'] = $comments;
            $this->view->render('post/detail.tpl', $data);
        }
    }

    function search() {
        if (isset($_GET['key'])) {
            $filters = array('name like ? or desciption like ?', '%' . $_GET['key'] . '%', '%' . $_GET['key'] . '%');
            $posts = PostModel::find('all', array('conditons' => $filters, 'limit' => 10, 'offset' => 0));
        } else {
            $filters = array();
            $conditionarr = array();
            foreach ($_GET as $key => $value) {
                if ($value == 'all') {
                    continue;
                }

                if ($key == 'pagesize') {
                    $filters['limit'] = $value;
                } else {
                    $filters['limit'] = $value;
                }
                if ($key == 'page') {
                    $filters['offset'] = ($filters['limit'] - 1) * 10;
                } else {
                    $filters['offset'] = 0;
                }

                $filters = array();
                if ($key == 'task' || $key == 'type') {
                    $conditionarr[$key . '=?'] = $value;
                }
                if ($key == 'time') {
                    //$time = intval(substr($value, 0, 1));
                    $time = explode('-', $value);
                    $conditionarr['duration>=? and duration <=?'] = $time;
                }
                if (preg_match('/^lefttime/', $key) == 1) {
                    //$conditionarr['timediff(now(),create_time) as duration'] = '';
                    $desc = substr($key, strripos($key, '_') + 1);
                    //$field = substr($key, 0, strripos($key, '_'));
                    if ($desc == 'desc') {
                        $filters['order'] = 'timediff(now(),create_time) desc';
                    } else {
                        $filters['order'] = 'timediff(now(),create_time) asc';
                    }
                    //var_dump($key);
                    //$filters['order'] = 
                } else if (preg_match('/^create_time/', $key) == 1 ||
                        preg_match('/^reward/', $key) == 1
                ) {
                    $desc = substr($key, strripos($key, '_') + 1);
                    $field = substr($key, 0, strripos($key, '_'));
                    if ($desc == 'desc') {
                        $filters['order'] = $field . ' desc';
                    } else {
                        $filters['order'] = $field . ' asc';
                    }
                }
            }
            $condition = implode(' AND ', array_keys($conditionarr));
            $coarr = array();
            $coarr[0] = $condition;
            foreach ($conditionarr as $k => $v) {
                if (is_array($v)) {
                    $coarr = array_merge($coarr, $v);
                } else {
                    if ((string) $v != '') {
                        array_push($coarr, $v);
                    }
                }
            }
            $filters['conditions'] = $coarr;
            $posts = PostModel::find('all', $filters);
            $result = array();
            foreach ($posts as $post) {
                array_push($result, $post->to_array());
            }
            $this->view->json($result);
        }
        /* if ($key == '') {
          $posts = PostModel::find(array('id' => $id));
          } */
    }

    public function apply($id = '') {
        if ($id == '') {
            $this->view->json(array('result' => 'failed', 'message' => 'no id'));
        } else {
            $postbill = new PostBll();
            $user = $_SESSION['user'];
            $uid = $user['id'];
            $nickname = $user['username'];
            $time = new ActiveRecord\DateTime();
            $status = '申请中';
            $result = $postbill->apply($id, $uid, $nickname, $time, $status);
            if (!$result) {
                $this->view->json(array('result' => 'failed', 'message' => '请勿重复申请'));
            } else {
                $this->view->json(array('result' => 'success', 'message' => '申请成功'));
            }
        }
    }

    public function addcomment() {
        if (isset($_POST['post_id']) && $_POST['post_id'] != null) {
            $postid = $_POST['post_id'];
            if (isset($_POST['content'])) {
                $postbill = new PostBll();
                $content = $_POST['content'];
                $parentid = isset($_POST['parent_id']) ? $_POST['parent_id'] : -1;
                $result = $postbill->addcomment($postid, $parentid, $content);
                if ($result == null) {
                    $this->view->json(array('result' => 'errir', 'message' => '已存在'));
                } else {
                    $this->view->json(array('result' => 'success', 'message' => '成功'));
                }
            } else {
                $this->view->json(array('result' => 'error', 'message' => '没有内容'));
            }
        } else {
            $this->view->json(array('result' => 'error', 'message' => '数据不正确'));
        }
    }

    function agree() {
        if (isset($_POST['uid']) && isset($_POST['postid'])) {
            $uid = $_POST['uid'];
            $postid = $_POST['postid'];
            $postbll = new PostBll();
            $result = $postbll->agree($uid, $postid, '申请成功');
            $this->view->json($result);
        } else {
            $this->view->json(array('result' => 'error', 'message' => 'parameters error'));
        }
    }

    function deny() {
        if (isset($_POST['uid']) && isset($_POST['postid'])) {
            $uid = $_POST['uid'];
            $postid = $_POST['postid'];
            $postbll = new PostBll();
            $result = $postbll->agree($uid, $postid, '拒绝申请');
            $this->view->json($result);
        } else {
            $this->view->json(array('result' => 'error', 'message' => 'parameters error'));
        }
    }

}
