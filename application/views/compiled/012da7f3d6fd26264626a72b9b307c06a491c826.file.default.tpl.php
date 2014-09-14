<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-15 00:15:53
         compiled from "/home/brian/www/smvc/application/views/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192896640953f36e7d0a13e7-31284806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012da7f3d6fd26264626a72b9b307c06a491c826' => 
    array (
      0 => '/home/brian/www/smvc/application/views/default.tpl',
      1 => 1410711352,
      2 => 'file',
    ),
    '2f67d92a855fa3b8042a767fa9d30ff734f47ddd' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/main.tpl',
      1 => 1410703458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192896640953f36e7d0a13e7-31284806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53f36e7d11c194_03259357',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f36e7d11c194_03259357')) {function content_53f36e7d11c194_03259357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="/page/login">登录</a></li>
      <li><a href="/page/register">注册</a></li>
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

    Hello, world

</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
