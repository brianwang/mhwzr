{extends file='layouts/admin.tpl'}
{block name=content}
    <a href="{site_url('/admin/adduser')}" class="button">添加用户</a>
    {include file='controls/grid.tpl' page=$pages 
curpage=$curpage 
objs=$objs 
colmuns=$columns
editurl ='/admin/edituser'
rmurl='/admin/rmuser'}
{/block}