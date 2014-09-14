<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-14 01:13:57
         compiled from "/home/brian/www/smvc/application/views/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178044246254145d69d27b01-52264579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3129213f12546023bf13b41f503e190f5a418a' => 
    array (
      0 => '/home/brian/www/smvc/application/views/register.tpl',
      1 => 1410627586,
      2 => 'file',
    ),
    '2f67d92a855fa3b8042a767fa9d30ff734f47ddd' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/main.tpl',
      1 => 1408464186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178044246254145d69d27b01-52264579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54145d69db11b5_46749673',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54145d69db11b5_46749673')) {function content_54145d69db11b5_46749673($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content" class="row">

    <form action="<?php echo site_url('/user/register');?>
" method="post">
        <input type="text" name="username" placeholder="用户名">
        <input type="text" name="email" placeholder="邮件">
        <input type="text" name="identity" placeholder="身份证">
        <input type="text" name="birthday" placeholder="出生年月">
        <input type="text" name="province" placeholder="省份">
        <input type="text" name="city" placeholder="城市">
        <input type="text" name="phone" placeholder="手机号码">
        <input type="text" name="password" placeholder="密码">
        <input type="text" name="confirmpassword" placeholder="确认密码">
        <select name="question">
            <?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['q']->value;?>
</option>
            <?php } ?>
        </select>
        <input type="text" name="answer" placeholder=“答案”>
        <input type="submit" value="注册">
        <a href="/page/login">直接登录</a>
    </form>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
