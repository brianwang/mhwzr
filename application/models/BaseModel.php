<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author brian
 */
class BaseModel extends ActiveRecord\Model {
    //put your code here
    public static function attrs(){
        return self::connection()->columns(self::table_name());
    }
    static $columns= array();
}
