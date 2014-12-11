<?php

//$config['base_url'] = 'http://www.mhwxr.com:8080'; // Base URL including trailing slash (e.g. http://localhost/)
$config['asset_url'] = '/static/'; // Base URL including trailing slash (e.g. http://localhost/)

$config['default_controller'] = 'page'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = 'localhost'; // Database host (e.g. localhost)
$config['db_name'] = 'mhwxr'; // Database name
$config['db_username'] = 'mhwxr'; // Database username
$config['db_password'] = 'mhwxr'; // Database password
$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(ROOT_DIR . '/application/models');
$cfg->set_connections(
        array(
            'development' => 'mysql://' . $config['db_username'] . ':' . $config['db_password'] . '@' . $config['db_host'] .
            '/' . $config['db_name'] . ';charset=utf8',
        )
);
$cfg->set_default_connection('development');
ActiveRecord\DateTime::$DEFAULT_FORMAT = 'Y-m-d H:i:s';

$config['sitename'] = '91找事网';
$config['phone400'] = 'XXX-XX-XXXX';
$config['questions'] = array(
    '你最喜欢的明星是谁?',
    '你的第一所学校是什么?',
    '你最爱看的书是什么？',
    '自定义答案'
);
$config['tasks'] = array('手机找人', '姓名找人', '照片找人', 'QQ找人', '邮箱找人');
$config['hookpath'] = 'hook';
$config['hookclass'] = 'hook';
$config['admin'] = 'admin';
$config['password'] = 'admin';
$config['types'] = array('公益找人', "悬赏找人");
$config['gender'] = array('男', "女");
$config['status'] = array(
    'going' => '进行中',
    'paying' => '付款中', 'payfinish' => '付款结束', 'finish' => '任务完成'
);
include 'urls.php';
include 'city.php';
$config['provinces'] = array_keys($config['cities']);
$config['banks'] = array(
    array('name' => '招商银行', 'value' => 'ZSYH'),
    array('name' => '建设银行', 'value' => 'ZSYH'),
    array('name' => '工商银行', 'value' => 'ZSYH'),
    array('name' => '', 'value' => 'ZSYH')
);
?>