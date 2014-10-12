{extends file='layouts/main.tpl'}
{block name='header'}
    <link rel="stylesheet" href="{asset_url('css/login_reg.css')}" />
{/block}
{block name=content}
    <div class="login_title bg_4">
        <p class="p_size_24 center">用户登录</p>
    </div>
    <div class="content center">
        <div class="content_left">
            <div class="login_box">
                {$error|default:''}
                <form action="{site_url('/auth/login')}" method="post">
                    <p><span class="textinput_label">用户名：</span><input class="text_name" type="text" name="username"></p>
                    <p><span class="textinput_label">密码：</span><input class="text_password" type="password" name="password"></p>
                    <p class="checkbox"><input type="checkbox" id="" value=""><span>记住密码</span></p>
                    <input type='submit' class="btn p_bold p_size_14 p_clor_ffffff" href="#" value="登录">
                    <a class="forget_password" href="#">忘记密码？</a>
                </form>
            </div>
            <p class="clear"></p>
        </div>
        <div class="content_right">
            <p class="p_size_18 p_bold p_grey1 p_lineHeight_50">还不是会员？</p>
            <a class="btn" href="{site_url('/page/register')}">立即注册</a>
            <p class="p_grey1 p_lineHeight_50 p_bold">您还可以通过以下方式登录</p>
        </div>
        <p class="clear"></p>
    </div>
{/block}