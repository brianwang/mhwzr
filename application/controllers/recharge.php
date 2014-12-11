<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author brian
 */
class recharge extends Controller {

    //put your code here
    function my() {
        if (isset($_SESSION['user'])) {
            $uid = $_SESSION['user']['id'];
            $rechargebll = new RechargeBll();
            $result = $rechargebll->getbyuid($uid);
            $this->view->json($result);
        } else {
            $this->view->json(array());
        }
    }

    
    //支付宝参数
    function zfb() {
        
    }

    //银联
    function yl() {
        
    }

}
