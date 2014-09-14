<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-15 00:00:21
         compiled from "/home/brian/www/smvc/application/views/post/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944864700541563793a5c74-69009534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6fe5870783130762907fca4b450b96885de6966' => 
    array (
      0 => '/home/brian/www/smvc/application/views/post/create.tpl',
      1 => 1410694446,
      2 => 'file',
    ),
    '2f67d92a855fa3b8042a767fa9d30ff734f47ddd' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/main.tpl',
      1 => 1410703458,
      2 => 'file',
    ),
    '328b762cf52dea5fc2223fa4edf49a9283435270' => 
    array (
      0 => '/home/brian/www/smvc/application/views/partials/province.tpl',
      1 => 1410689101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944864700541563793a5c74-69009534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_541563793a6639_04368173',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541563793a6639_04368173')) {function content_541563793a6639_04368173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

    <form action="<?php echo site_url('/post/create');?>
" method="post" enctype="multipart/form-data" >
         <input type="file" name="identity">
        <input type="text" name="name" placeholder ="姓名">
        <select name="gender">
            <option value="1">男</option>
            <option value="0">女</option>
        </select>
        <input type="text" name="birthday" placeholder ="出生年月">
        <?php /*  Call merged included template "partials/province.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('partials/province.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1944864700541563793a5c74-69009534');
content_5415bb96073e14_26374935($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "partials/province.tpl" */?>
        <select name='rewards'>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
        </select>
        <select name='task'>
            <option>查QQ</option>
            <option>查身份证</option>
            <option>查住址</option>            
        </select>
        <select name='duration'>
            <option value="1">1个月</option>
            <option value="2">2个月</option>
            <option value="3">3个月</option>            
        </select>
        <textarea name='description'></textarea>
        <input type='submit' value="提交">
        <input type='button' value="重置">
    </form>


</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-15 00:00:22
         compiled from "/home/brian/www/smvc/application/views/partials/province.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5415bb96073e14_26374935')) {function content_5415bb96073e14_26374935($_smarty_tpl) {?><select name="province">
    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['config']->value['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
    <?php } ?>
</select>
<select name='city'>
    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['province'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['province']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['province']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['province']->value;?>
</option>
    <?php } ?>
</select>
<?php }} ?>
