<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>美猴王找人网</title>
        <link rel="stylesheet" href="{asset_url('css/style_all.css')}" />
        <link rel="stylesheet" href="{asset_url('easyui/themes/default/easyui.css')}" />
        <script src="{asset_url('easyui/jquery.min.js')}" type="text/javascript"></script>
        <script src="{asset_url('easyui/easyloader.js')}" type="text/javascript"></script>
        <script src="{asset_url('easyui/jquery.easyui.min.js')}" type="text/javascript"></script>
        <script src="{asset_url('js/knockout-3.2.0.js')}" type="text/javascript"></script>
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
                <form action="{site_url('/post/search')}" action='get'>
                    <input type="text" placeholder="服务" class="input_search p_bold p_grey1" name='key'/>
                </form>
            </div>
            <a href="#" class="btn_search p_bold">搜索</a><span class="text_or p_bold p_grey1">或者</span>
            <a href="javascript:;" class="btn_search p_bold" style="width: 157px;" id="btn_createpost">发布一个找人</a>
        </div>
    </div>
    <div class="main_nav center">
        <ul>
            <li><a class="p_grey1" href="/">首页</a></li>
            <li><a class="p_grey1" href="{site_url('/page/items')}">寻人列表</a></li>
            <li><a class="p_grey1" href="{site_url('/page/success')}">成功案例</a></li>
            <li><a class="p_grey1" href="{site_url('/page/help')}">帮助中心</a></li>
        </ul>
        <p class="right"><a href="{site_url('/page/profile')}">个人中心</a><span class="p_grey"> | </span>
            <a href="{site_url('/page/srvguide')}">服务商中心</a> </p>
    </div>

{block name=content}{/block}
<div class="alert_public " style="display:none;" id="dialogcreatepost">
    <p class="alert_title">一键发布找人（无需注册）<a class="btn_close" href="javascript:;" onclick='$(this).parent().parent().toggle();
            return false;'>X</a></p>
    <div class="alert_content">
        {*<p class="item"><span class="label t_width_90">手机号码：</span><input class="input_text input_width_190" type="text" id="" value=""></p>
        <p class="item"><span class="label t_width_90">验证码：</span><input class="input_text input_width_90" type="text" id="" value=""></p>
        <p class="item"><span class="label t_width_90">手机验证码：</span><input class="input_text input_width_90" type="text" id="" value=""></p>
        <p class="item"><span class="label t_width_90">需求描述：</span><textarea class="textare"></textarea></p>
        <!--p class="item p_padding_100"><input class="input_text" type="text" id="" value=""><span class="label p_indent_20">可选内容，提高找人效率</span></p>
        <p class="item p_padding_100"><input class="input_text" type="text" id="" value=""><span class="label p_indent_20">可选内容，提高找人效率</span></p-->
        <div class="item"><span class="label t_width_90">任务分类：</span>
        <select name="type" class="easyui-combobox" >
        {foreach from=$config.types item=t}
        <option value="{$t}">{$t}</option>
        {/foreach}
        </select>
        <!--div class="combobox">                
        <p>公益找人<img src="img/pixel.gif" class="icon combobox_arror"></p>
        <ul class="list">
        <li>公益找人</li>
        <li>悬赏找人</li>
        </ul>
        </div-->
        </div>
        <div class="yanzheng"><img src="img/img_yanzheng.png"></div>
        <a href="#" class="phone_yanzheng p_lineHeight_30 p_bold">获取验证码</a>
        <a class="linkbtn" href="#">无法获取验证码？</a>
        <p class="error top_2"><img src="img/pixel.gif" class="icon icon_tanhao">请填写正确的验证码</p>
        <p class="success top_1"><img src="img/pixel.gif" class="icon icon_duihao"></p>
        <p class="item p_padding_100"><a class="btn" href="#">发布找人</a></p>*}
        <form action="{site_url('/post/save')}" method="post" enctype="multipart/form-data">
            {include file='model/post.tpl' isedit=false model=null isfile=false}

            <div>
                <input type='submit' value='提交' class="btn" style="margin: 20px 0 0 40px;"/>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <ul class="center size">
        <li class="item">
            <p class="p_bold p_size_18  p_grey2 p_lineHeight_70">关于我们</p>
            {foreach from=$config.company item=com}
                <a href="{$com.url}">{$com.title}</a>
            {/foreach}
        </li>
        <li class="item">
            <p class="p_bold p_size_18  p_grey2 p_lineHeight_70">交易保障</p>
            {foreach from=$config.trade item=td}
                <a href="{$td.url}">{$td.title}</a>
            {/foreach}
        </li>
        <li class="item weixin">
            <p class="p_bold p_size_18  p_grey2 p_lineHeight_70">官方微信</p>
            <img src="{asset_url('img/weixin.jpg')}"/>
        </li>
        <li class="item">
            <p class="p_bold p_size_18  p_grey2 p_lineHeight_70">关注我们</p>
            <a href="#">新浪官方微博</a>
            <a href="#">腾讯官方微博</a>
            <a href="#">一句话点评</a>
            <a href="#">分享给好友</a>
        </li>
        <li class="item">
            <p class="p_bold p_size_18  p_grey2 p_lineHeight_70">联系我们</p>
            <img src="{asset_url('img/pixel.gif')}" class="icon icon_phone"/><span class="p_bold p_size_35 p_clor_red"> 4006-999-467</span>
        </li>
    </ul>
    <p class="clear"></p>
    <div class="footer_nav">
        <div class="center">
            <p>
                {foreach from=$config.footer item=f}
                    <a href='{$f.url}'>{$f.title}</a><span class="p_grey"> |</span>
                    {/foreach}
            </p>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function () {
        $('#btn_createpost').click(function () {
            if ({$smarty.session.user|default: 'false' != null}) {
                $('#dialogcreatepost').toggle();
            } else {
                alert('请登录');
            }
        });
    });
</script>
{block name=script}{/block}
{include  file='layouts/footer.tpl'}
