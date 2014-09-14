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
            $user = UserModel::find(array('username' => $username, 'password' => md5($password)));
            if (user != null) {
                $_SESSION['user'] = $user;
                $this->redirect('/');
            }
        }
    }

}
