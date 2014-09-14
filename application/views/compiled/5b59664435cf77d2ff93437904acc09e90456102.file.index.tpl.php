<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-14 22:10:18
         compiled from "/home/brian/www/smvc/application/views/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129333776754159e8788e6e4-48921975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b59664435cf77d2ff93437904acc09e90456102' => 
    array (
      0 => '/home/brian/www/smvc/application/views/admin/index.tpl',
      1 => 1410703729,
      2 => 'file',
    ),
    'fe7f5834e02869f312a00b113b533b1984413a92' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/admin.tpl',
      1 => 1410703756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129333776754159e8788e6e4-48921975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54159e878e3436_15334656',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54159e878e3436_15334656')) {function content_54159e878e3436_15334656($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    <div class="span2">
        <ul class="side-nav">
            <li><a href="/admin/usermgmt">用户管理</a></li>
            <li class="divider"></li>
            <li><a href="/admin/postmgmt">寻人管理</a></li>
        </ul>
    </div>
    <div class="span10">
        
    

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
