<?php

$config['base_url'] = 'http://www.mhwxr.com'; // Base URL including trailing slash (e.g. http://localhost/)
$config['asset_url'] = '/static/'; // Base URL including trailing slash (e.g. http://localhost/)

$config['default_controller'] = 'page'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = 'localhost'; // Database host (e.g. localhost)
$config['db_name'] = 'mhwxr'; // Database name
$config['db_username'] = 'mhwxr'; // Database username
$config['db_password'] = 'mhwxr'; // Database password

define('BASE_URL', $config['base_url']);
$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(ROOT_DIR . '/application/models');
$cfg->set_connections(
        array(
            'development' => 'mysql://'.$config['db_username'].':'.$config['db_password'].'@'.$config['db_host'].
            '/'.$config['db_name'].';charset=utf8',
            //'test' => 'mysql://username:password@localhost/test_database_name',
            //'production' => 'mysql://username:password@localhost/production_database_name'
        )
);
$cfg->set_default_connection('development');
ActiveRecord\DateTime::$DEFAULT_FORMAT = 'Y-m-d H:i:s';

$config['sitename'] = '美猴网信息网';
$config['phone400'] = 'XXX-XX-XXXX';
$config['questions'] = array(
    '你最喜欢的明星是谁?',
    '你的第一所学校是什么?',
    '你最爱看的书是什么？',
    '自定义答案'
);
$config['tasks'] = array('手机找人', '姓名找人', '照片找人', 'QQ找人', '邮箱找人');
$config['times'] = array('一个月', '二个月', '三个月');
#$config['provinces'] = array('安徽', '北京', '重庆', '福建', '甘肃', '广东', '广西', '贵州', '海南', '河北', '黑龙江', '河南', '香港', '湖北', '湖南', '江苏', '江西', '吉林', '辽宁', '澳门', '内蒙古', '宁夏', '青海', '山东', '上海', '山西', '陕西', '四川', '台湾', '天津', '新疆', '西藏', '云南', '浙江', '海外');
$config['sitename'] = '美猴网信息网';
$config['hookpath'] = 'hook';
$config['hookclass'] = 'hook';
$config['admin'] = 'admin';
$config['password'] = 'admin';
$config['types'] = array('公益找人', "悬赏找人");
$config['gender'] = array('男', "女");
//$config['duration'] = array('1',"女");
$config['status'] = array(
    'going' => '进行中',
    'paying' => '付款中', 'payfinish' => '付款结束', 'finish' => '任务完成'
);
include 'urls.php';
include 'city.php';
$config['provinces'] = array_keys($config['cities']);
?>