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

    function index($id = '') {
        if ($id == '') {
            $this->show_404();
        } else {
            $post = PostModel::find(array('id' => $id));
            $postdata = $post->to_array(array('include' => 'comments'));
            $applyusers = array();
            $data['post'] = $postdata;
            $data['applyusers'] =$applyusers;
            $data['comments'] =array();
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
            //$condition = '';
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
                    $time = intval(substr($value, 0, 1));
                    $conditionarr['duration=?'] = $time;
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
                if ((string) $v != '') {
                    array_push($coarr, $v);
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

}
