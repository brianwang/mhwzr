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
class UserModel extends BaseModel {

    static $table_name = 'users';
    public static $columns = array(
        'username' => '用户名',
        'email' => '邮箱',
        'phone' => '电话',
        'identity' => '身份证',
        'province' => '省份',
        'city' => '城市',
        'birthday' => '出生日期',
        'gender' => '性别',
        'password' => '密码',
        'description' => '描述',
        'question' => '密保问题',
        'answer' => '密保答案',
        'idpic1' => '身份证正面照',
        'idpic2' => '身份证反面照',
        'register_time' => '注册日期',
        'status' => '状态',
    );
    public static $gridcolumns = array(
        'username' => '用户名',
        'email' => '邮箱',
        'phone' => '电话',
        'identity' => '身份证',
        'province' => '省份',
        'city' => '城市',
        'birthday' => '出生日期',
        'gender' => '性别',
        //'password' => '密码',
        'question' => '密保问题',
        'answer' => '密保答案',
        'register_time' => '注册日期',
    );

    public function get_gender() {
        $gender = $this->read_attribute('gender');
        return $gender == "1" ? '男' : '女';
    }

    public function get_birthday() {
        $birthday = $this->read_attribute('birthday');
        return date_format($birthday, 'Y-m-d');
    }

}
