<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>美猴王找人网</title>
        <link rel="stylesheet" href="{asset_url('css/style_all.css')}" />
    {block name=header}{/block}
</head>
<body>
    <div class="title">
        <div class="center">
            <p>您好，欢迎来到{$config.sitename}！</p>
            {if $smarty.session.user|default:false}
                <p class="login"><a href="/page/profile/{$smarty.session.user.id}">{$smarty.session.user.username}</a><span class="p_grey">|</span><a href="/user/logout">退出登录</a></p>
                    {else}
                <p class="login"><a class="p_yellow" href="#">请登录</a> <span class="p_grey">|</span> <a href="#">免费注册</a></p>
            {/if}
            <p class="nav"><span class="p_grey">| </span><a href="{site_url('/page/srvguide')}">服务商指南</a><span class="p_grey"> | </span><a href="{site_url('/page/help')}">帮助中心</a><span class="p_grey"> | </span>客服电话：400-366-7878</p>
            <p class="user"><a href="/">我的美猴王 <img src="{asset_url('img/pixel.gif')}" class="icon arror"></a></p>
        </div>
    </div>
    <div class="search center">
        <a href="/" class="logo"><img src="{asset_url('img/pixel.gif')}" class="icon logo"/></a>
        <div class="box">
            <div class="input_search_back">
                <input type="text" value="服务" class="input_search p_bold p_grey1"/>
            </div>
            <a href="#" class="btn_search p_bold">搜索</a><span class="text_or p_bold p_grey1">或者</span><a href="#" class="btn_search p_bold" style="width: 157px;">发布一个找人</a>
        </div>
    </div>
    <div class="main_nav center">
        <ul>
            <li><a class="p_grey1" href="/">首页</a></li>
            <li><a class="p_grey1" href="{site_url('/page/newuser')}">新手上路</a></li>
            <li><a class="p_grey1" href="{site_url('/page/success')}">成功案例</a></li>
            <li><a class="p_grey1" href="{site_url('/page/servicetry')}">服务试用</a></li>
        </ul>
        <p class="right"><a href="{site_url('/page/profile')}">个人中心</a><span class="p_grey"> | </span>
            <a href="{site_url('/page/srvguide')}">服务商中心</a> </p>
    </div>
   
{block name=content}{/block}
{include  file='layouts/footer.tpl'}
