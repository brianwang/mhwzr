<?php

/*
 * PIP v0.5.3
 */
//Start the Session
session_start();

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) . '/');
define('APP_DIR', ROOT_DIR . 'application/');
define('VENDOR_DIR', ROOT_DIR . 'vendor/');

require(VENDOR_DIR . 'autoload.php');
// Includes
require(APP_DIR . 'config/config.php');
require(APP_DIR . 'config/validate.php');
require(ROOT_DIR . 'system/model.php');
require(ROOT_DIR . 'system/view.php');
require(ROOT_DIR . 'system/controller.php');
require(ROOT_DIR . 'system/pip.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);


$cfg = ActiveRecord\Config::instance();
//
$cfg->set_model_directory(ROOT_DIR . '/application/models');
$cfg->set_connections(
        array(
            'development' => 'mysql://root:admin@localhost/mhwxr;charset=utf8',
            //'test' => 'mysql://username:password@localhost/test_database_name',
            //'production' => 'mysql://username:password@localhost/production_database_name'
        )
);
$cfg->set_default_connection('development');
ActiveRecord\DateTime::$DEFAULT_FORMAT = 'Y-m-d H:i:s';
//ActiveRecord\DateTime::$FORMATS['awesome_format'] = 'Y-m-d H:i:s';
pip();
?>
