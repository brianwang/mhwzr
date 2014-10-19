<select name='status'>
    {foreach from=$config.status item=s key=v}
        <option value="{$v}" {if $status == $v}selected{/if}>{$s}</option>
    {/foreach}
</select>