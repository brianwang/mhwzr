<select name="province">
    {foreach from=$config.provinces item=p}
        <option value="{$p}">{$p}</option>
    {/foreach}
</select>
<select name='city'>
    {foreach from=$config.cities item=p key=province}
        <option value="{$province}">{$province}</option>
    {/foreach}
</select>
