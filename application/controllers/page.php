<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author brian
 */
class page extends Controller {

    //put your code here

    public function index() {
        $this->view->render('default.tpl');
    }

    public function __call($name, $arguments) {
        $this->smarty->view($name . '.tpl', $arguments);
    }

}
