{extends file='layouts/admin.tpl'}
{block name=content}
    <form action="{site_url('/auth/login')}" method='post' class='form'>
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="提交">
    </form>
{/block}