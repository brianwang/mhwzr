{extends file='layouts/admin.tpl'}
{block name=content}    
        {include file='controls/grid.tpl' page=$pages curpage=$curpage objs=$objs colmuns=$columns}
{/block}