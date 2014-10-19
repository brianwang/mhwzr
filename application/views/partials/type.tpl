<select name="type">
    {foreach from=$config.types item=t}
        <option value="{$t}"{if $t == $type}selected{/if}>{$t}</option>
    {/foreach}
</select>
