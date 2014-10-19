<select name='task'>
    {foreach from=$config.tasks item=t}
        <option value="{$t}" {if $task == $t}selected{/if}>{$t}</option>
    {/foreach}
</select>