<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseBll
 *
 * @author brian
 */
class BaseBll {

    public function getbypk($id=''){
        if($id == '')
            return array();        
    }
    //put your code here
    protected function to_array($data) {
        $result = array();
        foreach ($data as $d) {
            array_push($result, $d->to_array());
        }
        return $result;
    }

}
