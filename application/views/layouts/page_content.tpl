{extends file='layouts/main.tpl'}
{block name="header"}
    <link rel="stylesheet" href="{asset_url('css/page_content.css')}" />
{/block}
{block name=content}
    <div class="content center">
        <div class="page_nav">
            <ul>
                <li class="box_title bg_0">服务内容</li>
            </ul>
        </div>
        {block name="pagebody"}{/block}
    </div>
{/block}