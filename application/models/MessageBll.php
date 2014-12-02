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

    public function getbyuid($uid = '', $page = 1, $pagesize = 10) {
        if ($uid == '') {
            return array();
        } else {
            $result = MessageModel::find('all', array('conditions' => array(
                            'touid=? or uid=?', $uid, $uid), 'limit' => $pagesize,
                        'offset' => ($page - 1) * $pagesize));
            $count = MessageModel::count(array('conditions' => array('uid=?', $uid)));
            $data = $this->to_array($result);
            return array('data' => $data, 'recordsTotal' => $count, 'recordsFiltered' => $count);
        }
    }

}
