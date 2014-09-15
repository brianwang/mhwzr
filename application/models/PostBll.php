<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostBLL
 *
 * @author brian
 */
class PostBll extends Model {


    public function create($data = array()) {
        $sql = 'insert into posts(';
        $values = '';
        foreach ($data as $key => $v) {
            $sql.= $key . ',';
            if (is_string($v)) {
                $values .= "'" . $v . "',";
            } else {
                $values .= $v . ',';
            }
        }
        $sql = substr($sql, 0, str_len($sql) - 1);
        $values = \substr($values, 0, str_len($values) - 1);
        $sql = $sql . ') values(' . $values . ')';
        echo $sql;
        $result = $this->query($sql);
        return $result;
    }

    function addcomments($data) {
        
    }

}
