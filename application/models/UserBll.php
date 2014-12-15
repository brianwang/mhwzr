<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserBll
 *
 * @author brian
 */
class UserBll extends BaseBll {

    //put your code herr
    public function login($username, $password) {
        $user = UserModel::find(array('username' => $username, 'password' => $password));
        if ($user != null) {
            return $user;
        } else {
            return null;
        }
    }

    public function register($data = array()) {
        $user = UserModel::find(array('username' => $data['username']));
        if ($user != null) {
            return null;
        } else {
            $user = UserModel::create($data);
            $result = $user->save();
            return $result;
        }
//        $username = $this->escapeString($username);
//        $password = md5($this->escapeString($password));
//        $nickname = $this->escapeString($nickname);
//
//
//
//        $result = $this->query("insert into users (name,password,nickname) values('" . $username . "','" . $password . "'," . $nickname . "');");
//        return $result;
    }

    public function count() {
        return UserModel::count();
    }

    public function saveprofile($data) {
        $oldpassd = MD5($data['oldpassword']);
        $user = UserModel::find(array('username' => $data['username'], 'password' => $oldpassd));
        if ($user != null) {
//            foreach ($data as $key => $v) {
//                if ($key == 'newpassword') {
//                    $v = MD5($v);
//                }
//                $user[$key] = $v;
//            }
            $user->password = MD5($data['newpassword']);
            $user->email = $data['email'];
            $user->qq= $data['qq'];
            $user->phone = $data['phone'];
            $user->save();
            return array('result' => 'success', 'message' => '保存成功');
        } else {
            return array('result' => 'error', 'message' => '用户不存在');
        }
    }

}
