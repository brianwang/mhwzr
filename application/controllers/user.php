<?php

class User extends Controller {

    function register() {
        //$template = $this->loadView('main_view');
        //$this->view->render('default.tpl');
    }

    function login() {
        $data = array();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            //if()
        } else {
            $data['error'] = '用户名和密码为空';
            $this->view->render('login.tpl', $data);
        }
    }

}

?>
