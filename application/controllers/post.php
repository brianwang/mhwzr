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

    function create() {
        $data = $_POST;
        $data['id'] = genid();
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
                $data['imgurl'] = $fileurl;
                move_uploaded_file($file, $filename);
            }
        }
        $post = PostModel::create($data);
        $post->save();
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

}
