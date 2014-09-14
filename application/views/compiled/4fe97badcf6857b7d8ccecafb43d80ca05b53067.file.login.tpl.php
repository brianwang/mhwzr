<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-14 17:35:17
         compiled from "/home/brian/www/smvc/application/views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147621089854156155751226-23117315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe97badcf6857b7d8ccecafb43d80ca05b53067' => 
    array (
      0 => '/home/brian/www/smvc/application/views/login.tpl',
      1 => 1410617036,
      2 => 'file',
    ),
    '2f67d92a855fa3b8042a767fa9d30ff734f47ddd' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/main.tpl',
      1 => 1408464186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147621089854156155751226-23117315',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_541561557c2c13_63746346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541561557c2c13_63746346')) {function content_541561557c2c13_63746346($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content" class="row">

    <form action="<?php echo site_url('/auth/login');?>
" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit">
    </form>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
