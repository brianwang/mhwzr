<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RechargeBll
 *
 * @author brian
 */
class RechargeBll extends BaseBll {

    //put your code here
    public function getbyuid($uid, $page = 1, $pagesize = 10) {
        $result = RechargeModel::find('all', array('conditions' => array(
                        'uid=?', $uid), 'limit' => $pagesize,
                    'offset' => ($page - 1) * $pagesize));
        $count = RechargeModel::count(array('conditions' => array('uid=?', $uid)));
        $data = $this->to_array($result);
        return array('data' => $data, 'recordsTotal' => $count, 'recordsFiltered' => $count);
        //return $this->to_array($result);
    }

}
