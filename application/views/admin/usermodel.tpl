{extends file='layouts/admin.tpl'}
{block name=content}
    {if $isedit}
        <form action="{site_url('/user/edit')}/{$user->id}" method="post">
            <input type="text" name="username" placeholder="用户名" value='{$user->username}'>
            <input type="text" name="email" placeholder="邮件" value='{$user->email}'>
            <input type="text" name="identity" placeholder="身份证" value='{$user->identity}'>
            <input type="text" name="birthday" placeholder="出生年月" value='{$user->birthday}'>
            <input type="text" name="province" placeholder="省份" value='{$user->province}'>
            <input type="text" name="city" placeholder="城市" value='{$user->city}'>
            <input type="text" name="phone" placeholder="手机号码" value='{$user->phone}'>
            <input type="text" name="password" placeholder="密码" value=''>
            <select name="question">
                {foreach from=$config.questions item=q}
                    <option {if $q==$user->question}selected{/if}>{$q}</option>
                    {/foreach}
            </select>
            <input type="text" name="answer" placeholder=“答案” value='{$user->answer}'>
            <input type="submit" value="更改">
        </form>
    {else}
        <form action="{site_url('/user/register')}" method="post">
            <input type="text" name="username" placeholder="用户名" value=''>
            <input type="text" name="email" placeholder="邮件" value=''>
            <input type="text" name="identity" placeholder="身份证" value=''>
            <input type="text" name="birthday" placeholder="出生年月" value=''>
            <input type="text" name="province" placeholder="省份" value=''>
            <input type="text" name="city" placeholder="城市" value=''>
            <input type="text" name="phone" placeholder="手机号码" value=''>
            <input type="text" name="password" placeholder="密码" value=''>
            <input type="text" name="confirmpassword" placeholder="确认密码" value=''>
            
            <select name="question">
                {foreach from=$config.questions item=q}
                    <option>{$q}</option>
                    {/foreach}
            </select>
            <input type="text" name="answer" placeholder=“答案” value=''>
            <input type="submit" value="添加">
        </form>
    {/if}
{/block}