<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentModel
 *
 * @author brian
 */
class Comment extends ActiveRecord\Model {

    //put your code here
    static $belongs_to = array(
        array('user','class_name'=>'UserModel'),
        array('post','class_name'=>'PostModel')
    );
    static $table_name = 'post_comments';

}
