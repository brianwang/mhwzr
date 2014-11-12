<select name="province">
    {foreach from=$config.provinces item=p}
        <option value="{$p}" {if  $p== $province}selected{/if}>{$p}</option>
    {/foreach}
</select>
<select name='city'>
    {foreach from=$config.cities item=p key=province}
        <option value="{$province}" {if  $p== $city}selected{/if}>{$province}</option>
    {/foreach}
</select>
<select name='area'>
    {foreach from=$config.cities[$city] item=a key=province}
        <option value="{$province}" {if  $p== $area}selected{/if}>{$a}</option>
    {/foreach}
</select>
