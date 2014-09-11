<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author brian
 */
class User_model extends Model {

    //put your code here

    public function login($username, $password) {
        $username = $this->escapeString($username);
        $password = md5($this->escapeString($password));
        $result = $this->query("select * from users where name='" . $username . "' and passsword='" . $password . "';");
        return $result;
    }

    public function register($username, $password, $nickname) {
        $username = $this->escapeString($username);
        $password = md5($this->escapeString($password));
        $nickname = $this->escapeString($nickname);
        $result = $this->query("insert into users (name,password,nickname) values('" . $username . "','" . $password . "'," . $nickname . "');");
        return $result;
    }

}
