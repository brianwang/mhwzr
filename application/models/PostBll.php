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

    function gettop3() {
        $posts = PostModel::find('all', array('order' => 'create_time desc', 'limit' => 3));
        if ($posts == nULL) {
            return array();
        } else {
            $result = array();
            foreach ($posts as $post) {
                array_push($result,$post->to_array());
            }
            return $result;
        }
    }

}
