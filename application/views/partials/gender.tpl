<select name="gender">
    {foreach from=$config.gender item=t}
        <option value="{$t}"{if $t == $gender}selected{/if}>{$t}</option>
    {/foreach}
</select>
