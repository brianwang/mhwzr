{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    <link rel="stylesheet" href="{asset_url('dt/media/css/jquery.dataTables.css')}" />
    <script src="{asset_url('/dt/media/js/jquery.dataTables.js')}"></script>
{/block}
{block name=pagebody}
    <div class="content center">
        <ul class="pay_content_left">
            <li class="left_title">个人中心</li>
                {foreach from=$config.profilemenu item=pm}
                <li class="pay_list_item {if $pm.url == cur_uri()}select{/if}">
                    <a href="{$pm.url}">{$pm.title}</a>
                    {if $pm.menus|default:[]|count > 0}
                        <ul>
                            {foreach from=$pm.menus item=cm}
                                <li></li>
                                {/foreach}
                        </ul>
                    {/if}

                </li>
            {/foreach}
        </ul>
        <div class="pay_content_right">
            <div class='profile'>
                <p class="right_title">{$content_title}</p>
                <div class="right_content">
                    {block name="profilecontent"}
                    {/block}
                </div>
            </div>

        </div>
        <div style="clear:both;"></div>
    {/block}