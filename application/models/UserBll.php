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
class UserBll extends Model {

    //put your code herr
    public function login($username, $password) {
        $user = UserModel::find(array('username' => $username, 'password' => $password));
        if ($user != null) {
            return $user;
        } else {
            //$username = $this->escapeString($username);
            //$password = md5($this->escapeString($password));
            //$result = $this->query("select * from users where name='" . $username . "' and passsword='" . $password . "';");
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

}
