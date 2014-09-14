<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-15 00:15:26
         compiled from "/home/brian/www/smvc/application/views/admin/usermgmt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14532557735415a1cb5a1a40-41359004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f621ba47824d3cb00c65fedf2b3acf592381c662' => 
    array (
      0 => '/home/brian/www/smvc/application/views/admin/usermgmt.tpl',
      1 => 1410707792,
      2 => 'file',
    ),
    'fe7f5834e02869f312a00b113b533b1984413a92' => 
    array (
      0 => '/home/brian/www/smvc/application/views/layouts/admin.tpl',
      1 => 1410711267,
      2 => 'file',
    ),
    '781f23470147c1ba8a31835740f20a11195f2f3f' => 
    array (
      0 => '/home/brian/www/smvc/application/views/controls/grid.tpl',
      1 => 1410710934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14532557735415a1cb5a1a40-41359004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5415a1cb5f01e6_68150288',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415a1cb5f01e6_68150288')) {function content_5415a1cb5f01e6_68150288($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
        
    <a href="#" class="button">添加用户</a>
    <?php /*  Call merged included template "controls/grid.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('controls/grid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page'=>$_smarty_tpl->tpl_vars['pages']->value,'curpage'=>$_smarty_tpl->tpl_vars['curpage']->value,'objs'=>$_smarty_tpl->tpl_vars['objs']->value,'colmuns'=>$_smarty_tpl->tpl_vars['columns']->value), 0, '14532557735415a1cb5a1a40-41359004');
content_5415bf1e7d1da1_42971559($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "controls/grid.tpl" */?>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-09-15 00:15:26
         compiled from "/home/brian/www/smvc/application/views/controls/grid.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5415bf1e7d1da1_42971559')) {function content_5415bf1e7d1da1_42971559($_smarty_tpl) {?><table>
    <thead>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                <th><?php echo $_smarty_tpl->tpl_vars['column']->value;?>
</th>
                <?php } ?>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['obj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['objs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->_loop = true;
?>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
                    
                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->{$_smarty_tpl->tpl_vars['k']->value};?>
</td>
                <?php } ?>
                <td>
                    <a>编辑</a>
                    <a>删除</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="<?php echo count($_smarty_tpl->tpl_vars['columns']->value)+1;?>
">
                <ul class="pagination">
                    <li class="arrow unavailable"><a href="">&laquo;</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['pages']->value>4) {?>
                            <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                            <li <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['curpage']->value) {?>class="current"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                            <?php }} ?>
                        <li class="unavailable"><a href="">&hellip;</a></li>
                            <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - ($_smarty_tpl->tpl_vars['pages']->value-1) : $_smarty_tpl->tpl_vars['pages']->value-1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['pages']->value-1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                            <li <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['curpage']->value) {?>class="current"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                            <?php }} ?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                            <li <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['curpage']->value) {?>class="current"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                            <?php }} ?>
                        <?php }?>
                    <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </td>
        </tr>
    </tfoot>
</table>
<?php }} ?>
