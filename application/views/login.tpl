{extends file='layouts/main.tpl'}
{block name=content}
    <form action="{site_url('/auth/login')}" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit">
    </form>
{/block}