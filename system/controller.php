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

    public function display($tplfile = '', $data = array(), $isfetch = false) {
        if ($tplfile == '') {
            $idx = strripos(__METHOD__, ':') + 1;
            $method = substr(__METHOD__, $idx);
            $classname = debug_backtrace()[1]['class'];
            $method= debug_backtrace()[1]['function'];
            $tplfile = VIEW_DIR . $classname . '/' . $method . '.html';
        }
        //if ($isfetch) {
        return $this->view->render($tplfile, $data, $isfetch);
        //} else {
        // $this->view->render($tplfile, $data);
        //}
    }

}

?>