<?php

require APP_DIR . '/helpers/url_helper.php';

class View {

    //private $pageVars = array();
    //private $template;
    private $smarty;

    public function __construct() {
        //$this->template = APP_DIR . 'views/' . $template . '.php';
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(APP_DIR . '/views');
        $this->smarty->setCompileDir(APP_DIR . '/views/compiled');
        $urlhelper =new Url_helper();
        //$this->smarty->registerClass('urlhelper', 'Url_helper');
        $this->smarty->registerObject('urlhelper', $urlhelper);
    }

    public function render($filename, $data = array(), $return = false) {
//        ob_start();
//        require($this->template);
//        echo ob_get_clean();
        $tmpl = $this->smarty->createTemplate($filename, NULL, NULL, $data, NULL);
        if ($return)
            $tmpl->fetch();
        else
            $tmpl->display();
    }

}

?>
