<?php

class Error extends Controller {

    function index() {
        $this->error404();
    }

    function error404() {
       $this->view->render('errors/404.tpl',$data);
    }

    function error500() {
        $this->view->render('errors/500.tpl',$data);
    }

}

?>
