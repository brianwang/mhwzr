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
class MessageBll extends BaseBll {

    public function getbyuid($uid = '') {
        if ($uid == '') {
            return array();
        } else {
            $messgae = new MessageModel();
            $result = $messgae->find('all', array('conditions' => array('creator=?', $uid)));
            return $this->to_array($result);
        }
    }

}
