<?php

class Error extends Controller {

    function index() {
        $this->error404();
    }

    function error404() {
        echo '<h1>404 Error</h1>';
        echo '<p>Looks like this page doesn\'t exist</p>';
    }

    function error500() {
        echo '<h1>500 Error</h1>';
        //echo '<p>Looks like this page doesn\'t exist</p>';
    }

}

?>
