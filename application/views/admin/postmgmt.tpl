{extends file='layouts/admin.tpl'}
{block name=content}    
        {include file='controls/grid.tpl' page=$pages curpage=$curpage objs=$objs 
colmuns=$columns
editurl='/admin/editpost'
rmurl='/admin/rmpost' 
       }
{/block}