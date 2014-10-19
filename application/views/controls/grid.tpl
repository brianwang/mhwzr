<table>
    <thead>
        <tr>
            {foreach from=$columns item=column}
                <th>{$column}</th>
                {/foreach}
            <th></th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$objs item=obj}
            <tr>
                {foreach from=$columns item=col key=k}
                    <td>{$obj->$k}</td>
                {/foreach}
                <td>
                    <a href="{$editurl}/{$obj->id}">编辑</a>
                    <a href="{$rmurl}/{$obj->id}">删除</a>
                </td>
            </tr>
        {/foreach}
    </tbody>
    <tfoot>
        <tr>
            <td colspan="{$columns|count+1}">
                <ul class="pagination">
                    <li class="arrow unavailable"><a href="">&laquo;</a></li>
                        {if $pages > 4}
                            {for $page=1 to 4}
                            <li {if $page== $curpage}class="current"{/if}><a href="{$page}">{$page}</a></li>
                            {/for}
                        <li class="unavailable"><a href="">&hellip;</a></li>
                            {for $page=$pages-1 to $pages}
                            <li {if $page== $curpage}class="current"{/if}><a href="{$page}">{$page}</a></li>
                            {/for}
                        {else}
                            {for $page=1 to $pages}
                            <li {if $page== $curpage}class="current"{/if}><a href="{$page}">{$page}</a></li>
                            {/for}
                        {/if}
                    <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </td>
        </tr>
    </tfoot>
</table>
