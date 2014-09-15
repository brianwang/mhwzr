<?php

class Controller {

    /**
     *
     * @var View
     */
    protected $view;

    function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {
        require(APP_DIR . 'models/' . strtolower($name) . '.php');

        $model = new $name;
        return $model;
    }

    public function loadPlugin($name) {
        require(APP_DIR . 'plugins/' . strtolower($name) . '.php');
    }

    public function loadHelper($name) {
        require(APP_DIR . 'helpers/' . strtolower($name) . '.php');
        $helper = new $name;
        return $helper;
    }

    public function redirect($loc) {
        global $config;
        if (strpos($loc, 'http') > -1) {
            header('Location: ' . $loc);
        } else {
            header('Location: ' . $config['base_url'] . $loc);
        }
    }

    public function show_404($message = '') {
        header('HTTP/1.0 404 Not Found');
        echo "<h1>404 Not Found</h1>";
        echo $message;
        exit();
    }

    public function show_error($message = '') {
        header('HTTP/1.0 500 ERROR');
        echo $message;
        exit();
    }

}

?>