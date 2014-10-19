<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api
 *
 * @author brian
 */
class api extends Controller {

    //put your code here
    public function province() {
        global $config;
        echo json_encode(array_keys($config['cities']));
    }

    public function city($province='') {
        global $config;
        $province = urldecode($province);
        if (isset($config['cities'][$province])) {
            echo json_encode($config['cities'][$province]);
        } else {
            echo json_encode(array());
        }
    }

}
