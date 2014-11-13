<?php

/*
 * PIP v0.5.3
 */
//Start the Session
session_start();
//include("captcha.php");
// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) . '/');
define('APP_DIR', ROOT_DIR . 'application/');
define('VIEW_DIR', ROOT_DIR . 'application/views/');
define('VENDOR_DIR', ROOT_DIR . 'vendor/');

require(VENDOR_DIR . 'autoload.php');
// Includes
require(APP_DIR . 'config/config.php');
require(APP_DIR . 'config/function.php');
require(APP_DIR . 'config/validate.php');
require(ROOT_DIR . 'system/common.php');
require(ROOT_DIR . 'system/model.php');
require(ROOT_DIR . 'system/view.php');
require(ROOT_DIR . 'system/controller.php');
require(ROOT_DIR . 'system/pip.php');

// Define base URL
//ActiveRecord\DateTime::$FORMATS['awesome_format'] = 'Y-m-d H:i:s';
pip();
?>
