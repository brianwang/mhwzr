<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth
 *
 * @author brian
 */
class auth extends Controller {

    //put your code here

    function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username != '' && $password != "") {
            $password = md5($password);
            $user = UserModel::find(array('username' => $username, 'password' => $password));
            if ($user != null) {
                $_SESSION['user'] = $user->to_array();
                $this->redirect('/');
            } else {
                $data['error'] = '用户名密码错误';
                $this->view->render('login.tpl', $data);
            }
        } else {
            $data['error'] = '请输入用户名和密码';
            $this->view->render('login.tpl', $data);
        }
    }

}
