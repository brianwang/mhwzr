<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-08-20 00:21:20
         compiled from "/home/brian/www/smvc/application/views/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192896640953f36e7d0a13e7-31284806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012da7f3d6fd26264626a72b9b307c06a491c826' => 
    array (
      0 => '/home/brian/www/smvc/application/views/default.tpl',
      1 => 1408465279,
      2 => 'file',
    ),
    '2f67d92a855fa3b8042a767fa9d30ff734f47ddd' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/main.tpl',
      1 => 1408464186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192896640953f36e7d0a13e7-31284806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53f36e7d11c194_03259357',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f36e7d11c194_03259357')) {function content_53f36e7d11c194_03259357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content" class="row">

    <?php echo $_smarty_tpl->smarty->registered_objects['urlhelper'][0]->base_url(array(),$_smarty_tpl);?>

    Hello, world

</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
