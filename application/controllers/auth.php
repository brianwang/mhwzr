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
use Gregwar\Captcha\CaptchaBuilder;

class auth extends Controller {

    function registerverify() {
        $builder = new CaptchaBuilder;
        $builder->build();
        header('Content-type: image/jpeg');
        // Example: storing the phrase in the session to test for the user 
        $_SESSION['phrase'] = $builder->getPhrase();
        echo $builder->output();
        //$_SESSION['captcha'] = captcha();
        //echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';
    }

    function postverify() {
        $builder = new CaptchaBuilder;
        $builder->build();
        header('Content-type: image/jpeg');
        // Example: storing the phrase in the session to test for the user 
        $_SESSION['postphrase'] = $builder->getPhrase();
        echo $builder->output();
    }

    //put your code here

    function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username != '' && $password != "") {
            global $config;
            if ($username == $config['admin'] && $password == $config['password']) {
                $_SESSION['user'] = array(
                    'username' => 'admin',
                    'id' => 'admin',
                    'isadmin' => true
                );
                redirect('/admin');
            } else {
                $password = md5($password);
                $user = UserModel::find(array('username' => $username, 'password' => $password));
                if ($user != null) {
                    $user = $user->to_array();
                    $user['isadmin'] = false;
                    $_SESSION['user'] = $user;
                    redirect('/');
                } else {
                    $data['error'] = '用户名密码错误';
                    $this->view->render('login.tpl', $data);
                }
            }
        } else {
            $data['error'] = '请输入用户名和密码';
            $this->view->render('login.tpl', $data);
        }
    }

}
