<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-15 00:15:27
         compiled from "/home/brian/www/smvc/application/views/admin/recharge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13469160215415bf1ff2ced6-05962081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b110e7c11870a5fd3f55f538a7c011b941fd495' => 
    array (
      0 => '/home/brian/www/smvc/application/views/admin/recharge.tpl',
      1 => 1410711320,
      2 => 'file',
    ),
    'fe7f5834e02869f312a00b113b533b1984413a92' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/admin.tpl',
      1 => 1410711267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13469160215415bf1ff2ced6-05962081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5415bf20084483_24741636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415bf20084483_24741636')) {function content_5415bf20084483_24741636($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
</a></h1>
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
            <li><a href="/admin/comsume">消费</a></li>
            <li class="divider"></li>
            <li><a href="/admin/postmgmt/1">寻人管理</a></li>
        </ul>
    </div>
    <div class="medium-10 columns">
            
        

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
