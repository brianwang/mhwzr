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
                $duration = date_diff(new DateTime(), new DateTime($post['birthday']));
                $post['age'] = $duration->y;
                if (isset($_SESSION['user'])) {
                    $username = $_SESSION['user']['username'];
                    $creator = $_SESSION['user']['id'];
                } else {
                    $username = '游客';
                    $creator = '-1';
                }
                $post['creator'] = $creator;
                $post['creator_name'] = $username;
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
            $data['post'] = $post->to_array(array('include' => 'comments'));
            $this->view->render('post/detail.tpl', $data);
        }
    }

    function search($key = '') {
        if ($key == '') {
            $posts = PostModel::find(array('id' => $id));
        }
    }

}
