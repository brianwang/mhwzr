{assign var="contenttitle" value="个人信息" scope=parent}
{extends file='profile/layout.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    <link rel="stylesheet" href="{asset_url('dt/media/css/jquery.dataTables.css')}" />
    <script src="{asset_url('/dt/media/js/jquery.dataTables.js')}"></script>
{/block}
{block name=profilecontent}
    <form action='{site_url('/user/saveprofile')}' method='post' id="profileform">
        {include file='model/user.tpl' model=$user}
        <input type='submit' class="btn" value="保存">
    </form>
    <script>
        $("#profileform").validate({
            rules: {
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                qq: {
                    required: true
                }
            },
            messages: {
                name: "Required Field",
                qq: { required:'需要填写QQ'},
                email: { required:'需要填写邮箱',email: '邮箱格式不正确'}
            }
        });
    </script>
{/block}