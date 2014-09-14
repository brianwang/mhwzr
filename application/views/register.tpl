{extends file='layouts/main.tpl'}
{block name=content}
    <form action="{site_url('/user/register')}" method="post">
        <input type="text" name="username" placeholder="用户名">
        <input type="text" name="email" placeholder="邮件">
        <input type="text" name="identity" placeholder="身份证">
        <input type="text" name="birthday" placeholder="出生年月">
        <input type="text" name="province" placeholder="省份">
        <input type="text" name="city" placeholder="城市">
        <input type="text" name="phone" placeholder="手机号码">
        <input type="text" name="password" placeholder="密码">
        <input type="text" name="confirmpassword" placeholder="确认密码">
        <select name="question">
            {foreach from=$questions item=q}
            <option>{$q}</option>
            {/foreach}
        </select>
        <input type="text" name="answer" placeholder=“答案”>
        <input type="submit" value="注册">
        <a href="/page/login">直接登录</a>
    </form>
{/block}