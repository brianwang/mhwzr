<?php

$config['company'] = array(
    array('title' => '公司简介', 'url' => '/company/about'),
    array('title' => '发展历程', 'url' => '/company/progress'),
    array('title' => '平台公告', 'url' => '/company/notice'),
    array('title' => '联系方式', 'url' => '/company/contact')
);

$config['trade'] = array(
    array('title' => '担保交易', 'url' => '/company/danbao'),
    array('title' => '诚信保障', 'url' => '/company/chengxin'),
    array('title' => '网站协议', 'url' => '/company/xieyi'),
    array('title' => '支付方式', 'url' => '/company/pay')
);

$config['footer'] = array(
    array('title' => '首页', 'url' => '/'),
    array('title' => '关于我们', 'url' => '/company/about'),
    array('title' => '新闻中心', 'url' => '/company/news'),
    array('title' => '联系方式', 'url' => '/company/contact'),
    array('title' => '客服中心', 'url' => '/company/support')
);
$config['profilemenu'] = array(
    array('title' => '个人首页', 'url' => '/page/profile/user'),
    array('title' => '发布记录', 'url' => '/page/profile/publish'),
    array('title' => '申请记录', 'url' => '/page/profile/apply'),
    array('title' => '充值消费', 'url' => 'javascript:;', 'menus' => array(
            array('title' => '我要充值', 'url' => '/page/profile/recharge'),
            array('title' => '充值记录', 'url' => '/page/profile/rechargelog'),
            array('title' => '消费记录', 'url' => '/page/profile/consumelog'),
        )),
    array('title' => '个人消息', 'url' => '/page/profile/message')
);
