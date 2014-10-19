{include  file='layouts/adminheader.tpl'}
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">{$config.sitename}</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="/">回到网站首页</a></li>
        </ul>
    </section>
</nav>
<div id="content" class="row">
    <div class="medium-2 columns">
        <ul class="side-nav">
            <li><a href="/admin/usermgmt/1">用户管理</a></li>
            <li class="divider"></li>
            <li><a href="#">资金管理</a></li>
            <li><a href="/admin/recharge">充值</a></li>
            <li><a href="/admin/consume">消费</a></li>
            <li class="divider"></li>
            <li><a href="/admin/postmgmt/1">寻人管理</a></li>
        </ul>
    </div>
    <div class="medium-10 columns">
        {block name=content}

        {/block}
    </div>
</div>
<script>{block name=scrtip}{/block}</script>
{include  file='layouts/footer.tpl'}
