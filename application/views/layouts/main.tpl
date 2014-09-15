{include  file='layouts/header.tpl'}
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">{$config.sitename}</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            {if $smarty.session.user|default:false}
                <li><a href="/page/profile/{$smarty.session.user.id}"}>{$smarty.session.user.username}</a></li>
                <li><a href="/user/logout">退出登录</a></li>
            {else}
                <li><a href="/page/login">登录</a></li>
                <li><a href="/page/register">注册</a></li>
            {/if}
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="/">首页</a></li>
            <li><a href="#">首页</a></li>
            <li><a href="#">首页</a></li>

        </ul>
    </section>
</nav>
<div id="content" class="row">
{block name=content}{/block}
</div>
{include  file='layouts/footer.tpl'}
