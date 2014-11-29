{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    <link rel="stylesheet" href="{asset_url('dt/media/css/jquery.dataTables.css')}" />
    <script src="{asset_url('/dt/media/js/jquery.dataTables.js')}"></script>
{/block}
{block name=pagebody}
    <div class="content center">
        <div class="pay_content_left">
            <h2 class="left_title">个人中心</h2>
            {foreach from=$config.profilemenu item=pm}
                <div class="pay_list_item {if $pm.url == cur_uri()}select{/if}">
                    <a href="{$pm.url}">{$pm.title}</a>
                    
                    {if $pm.menus|default:[]|count > 0}
                        <ul class="submenu">
                            {foreach from=$pm.menus item=cm}
                                <li><a href="{$cm.url}">{$cm.title}</a></li>
                                {/foreach}
                        </ul>
                    {/if}
                </div>
            {/foreach}
        </div>
        <script type="text/javascript">
             var datatablelang =  {
                "sLengthMenu": "每页显示 _MENU_ 条记录",
                "sZeroRecords": "没有检索到数据",
                "sInfo": "当前数据为从第 _START_ 到第 _END_ 条数据；总共有 _TOTAL_ 条记录",
                "sInfoEmtpy": "没有数据",
                "sProcessing": "正在加载数据...",
                "oPaginate": {
                    "sFirst": "首页",
                    "sPrevious": "前页",
                    "sNext": "后页",
                    "sLast": "尾页"
                },
                "sSearch": "搜索"
            };
            
        </script>
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