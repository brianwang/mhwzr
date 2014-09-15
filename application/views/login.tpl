{extends file='layouts/main.tpl'}
{block name=content}
    {$error|default:''}
    <form action="{site_url('/auth/login')}" method="post">
        <div>
            <input type="text" name="username">
        </div>
        <div>
            <input type="password" name="password">
        </div>
        <input type="submit">

    </form>
{/block}