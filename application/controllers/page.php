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
        $data['today'] = $postbll->gettoday();
        $userdll = new UserBll();
        $data['usercount'] = $userdll->count();
        $this->view->render('index.tpl', $data);
    }

    function test() {
//        echo VIEW_DIR;
//        echo __CLASS__;
//        echo __METHOD__;
//        $idx = strripos(__METHOD__, ':');
//        $method = substr(__METHOD__, $idx + 1);
//        echo $method;
        $now = date('Y-m-d', time());
        echo $now;
        //$this->display();
    }

    public function tasks() {
        $this->xunren('', 1, 'going', 't');
    }

    public function xunren($key = '', $pageid = 1, $status = 'going') {
        $data = array();
        $postbll = new PostBll();
        if ($key != '') {
            $data['posts'] = $postbll->search(urldecode($key), $pageid);
            $data['pages'] = count($data['posts']) / 10;
            $data['curpage'] = $pageid;
        } else {
            $pages = $postbll->getpages();
            if ($pageid > $pages) {
                $data['posts'] = array();
            } else {
                $data['posts'] = $postbll->getitems($pageid, 10, $status);
            }
            $data['pages'] = $pages;
            $data['curpage'] = $pageid;
        } $this->view->render('list.tpl', $data);
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

    function userprofile($uid = '') {
        if ($uid == '') {
            $this->view->error(404);
        } else {
            $result = UserModel::find('all', array('id' => $uid));
            if ($result != null && count($result) == 1) {
                //$user = $result->to_array();
                $data['user'] = $result[0]->to_array();
                $this->view->render('userprofile.tpl', $data);
            }
        }
    }

    function profile($tag = '') {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $data['user'] = $user;
            $post = new PostBll();
            $data['posts'] = $post->getbyuid($user['id']);
            $message = new MessageBll();
            $data['messages'] = $message->getbyuid($user['id']);
            if ($tag != '') {
                //$data['title'] = $config['profilemenu'][$tag];
                $righttitles = array('user' => '个人信息',
                    'rs' => '充值消费',
                    'apply' => '申请记录',
                    'publish' => '发布记录',
                    'message' => '个人消息',
                );
                $data['content_title'] = isset($righttitles[$tag])?$righttitles[$tag]:'';
                $this->view->render('profile/' . $tag . '.tpl', $data);
            } else {
                $this->view->render('profile.tpl', $data);
            }
        } else {
            redirect('/page/login');
        }
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
