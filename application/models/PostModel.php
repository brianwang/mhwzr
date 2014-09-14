<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of post_model
 *
 * @author brian
 */
class PostModel extends BaseModel {

    static $table_name = "posts";
    static $attr_protected = array('');
    static $columns = array(
        'name' => '人名',
        'province' => '省份',
        'city' => '城市',
        'birthday' => '生日',
        'gender' => '性别',
        'description' => '个人描述',
        'task' => '任务',
        'duration' => '有效期',
        'rewards' => '奖励',
        'create_time' => '创建日期',
        'status' => '状态',
            //'creator' => '',
            //'imgurl' => ''
    );

    public function get_gender() {
        $gender = $this->read_attribute('gender');
        return $gender == 1 ? '男' : '女';
    }
    public function get_birthday(){
        $birthday = $this->read_attribute('birthday');
        return date_format($birthday,'Y-m-d');
    }
}
