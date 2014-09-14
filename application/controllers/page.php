<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author brian
 */
class page extends Controller {

    //put your code here

    public function index() {
        $this->view->render('default.tpl');
    }

    public function register() {
        $data['province'] = array();
        $data['cities'] = array();
        $data['questions'] = array(
            '你最喜欢的明星是谁?',
            '你的第一所学校是什么?',
            '你最爱看的书是什么？',
            '自定义答案'
        );
        $this->view->render('register.tpl',$data);
    }

    public function login() {
        $this->view->render('login.tpl');
    }
    
    function createpost(){
        $this->view->render('post/create.tpl');
        
    }
    

}
