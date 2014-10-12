<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hook
 *
 * @author brian
 */
class hook {

    //put your code here

    public function before($controller, $action) {
        //$url = $_SERVER['REQUEST_URI'];
        if (!isset($_SESSION['user'])) {
            if (($controller == 'page' && $action == 'login') || ($controller == 'auth' && $action == 'login') || ($controller == 'page' && $action == 'register')
            ) {
                
            } else {
                redirect('/page/login');
            }
        } else {
            //$user = $_SESSION['user'];
            // if ($user->isadmin) {
            // } else {
            //}
        }
    }

    public function after() {
        
    }

}
