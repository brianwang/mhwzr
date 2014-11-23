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
    public function getbyuid($uid) {
        $result = RechargeModel::find('all', array('conditions' => array(
                        'uid=?', $uid)));
        return $this->to_array($result);
    }

}
