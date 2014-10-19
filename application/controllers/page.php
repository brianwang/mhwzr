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
        $data['top4'] = $postbll->gettop4();
        $data['today'] =$postbll->gettoday();
        $this->view->render('index.tpl', $data);
    }

    function test() {
//        echo VIEW_DIR;
//        echo __CLASS__;
//        echo __METHOD__;
//        $idx = strripos(__METHOD__, ':');
//        $method = substr(__METHOD__, $idx + 1);
//        echo $method;
         $now=date('Y-m-d',time());
         echo $now;
        //$this->display();
    }

    public function items($pageid = 1, $status = 'going') {
        $data = array();
        $postbll = new PostBll();
        $pages = $postbll->getpages();
        if ($pageid > $pages) {
            $data['posts'] = array();
        } else {
            $data['posts'] = $postbll->getitems($pageid, 10, $status);
        }
        $data['pages'] = $pages;
        $data['curpage'] = $pageid;
        $this->view->render('list.tpl', $data);
    }

    public function register() {
        $data['province'] = array();
        $data['cities'] = array();
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

    function recharge() {
        $this->view->render('recharge.tpl');
    }

}
