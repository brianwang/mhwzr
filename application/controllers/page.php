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
        $data = array();
        $postbll = new PostBll();
        $data['top3'] = $postbll->gettop3();
        $this->view->render('index.tpl',$data);
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
        $this->view->render('register.tpl', $data);
    }

    public function login() {
        $this->view->render('login.tpl');
    }

    function createpost() {
        $this->view->render('post/create.tpl');
    }

    //新手上路
    function newuser() {
        $this->view->render('newuser.tpl');
    }

    //成功案例
    function success() {
        $this->view->render('success.tpl');
    }

    function servicetry() {
        $this->view->render('servicetry.tpl');
    }

    function profile() {
        $this->view->render('profile.tpl');
    }

    function srvcenter() {
        $this->view->render('srvcenter.tpl');
    }

    function srvguide() {
        $this->view->render('srvguide.tpl');
    }

    function help() {
        $this->view->render('help.tpl');
    }

}
