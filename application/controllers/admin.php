<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author brian
 */
class admin extends Controller {

    //put your code here

    function index() {
        $this->view->render('admin/index.tpl');
    }

    function usermgmt($curpage = 1) {
        $data = array();
        $pagesize = 1;
        //$curpage = 1;
        $users = UserModel::all(array('limit' => $pagesize, 'offset' => $pagesize * $curpage));
        //var_dump($users);
        $data['users'] = $users;
        $data['objs'] = $users;
        $data['columns'] = UserModel::$gridcolumns;
        $data['pages'] = (UserModel::count() / $pagesize) - 1;
        $data['curpage'] = $curpage;
        //var_dump(UserModel::attrs());
        $this->view->render('admin/usermgmt.tpl', $data);
    }

    function postmgmt($curpage = 1) {
        $data = array();
        $pagesize = 1;
        //$curpage = 1;
        $users = PostModel::all(array('limit' => $pagesize, 'offset' => $pagesize * $curpage));
        //var_dump($users);
        $data['users'] = $users;
        $data['objs'] = $users;
        $data['columns'] = PostModel::$columns;
        $data['pages'] = (PostModel::count() / $pagesize) - 1;
        $data['curpage'] = $curpage;
        $this->view->render('admin/postmgmt.tpl', $data);
    }

    function recharge() {
        $data = array();
        $this->view->render('admin/recharge.tpl', $data);
    }

    function consume() {
        $data = array();
        $this->view->render('admin/consume.tpl', $data);
    }

}
