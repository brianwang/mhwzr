{extends file='layouts/main.tpl'}
{block name=content}
    首页
    {*top3 数据*}
    <p>Top3 数据</p>
    {$top3|json_encode}
{/block}