<?php

class Main extends Controller {

    function index() {
        //$template = $this->loadView('main_view');
        $this->view->render('default.tpl');
    }

}

?>
