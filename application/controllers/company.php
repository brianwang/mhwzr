<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of company
 *
 * @author brian
 */
class company extends Controller {

    //put your code here

    public function about() {
        $this->view->render('company/about.tpl');
    }

    public function progress() {
        $this->display();
    }

    public function notice() {
        $this->display();
    }

    public function danbao() {
        $this->display();
    }

    public function chengxin() {
        $this->display();
    }

    public function xieyi() {
        $this->display();
    }

    public function pay() {
        $this->display();
    }

    public function news() {
        $this->view->render('company/news.tpl');
    }

    public function support() {
        $this->display();
    }
    
    public function contact(){
        $this->view->render('company/contact.tpl');
    }

}
