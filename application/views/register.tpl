{extends file='layouts/main.tpl'}
{block name='header'}
    <link rel="stylesheet" href="{asset_url('css/login_reg.css')}" />
{/block}
{block name=content}
    <div class="login_title bg_4">
        <p class="p_size_24 center">用户注册</p>
    </div>
    <div class="content center">
        
        <form action="{site_url('/user/register')}" method="post">
            <div class="content_left">
                <span class="error"> {$error|default:''}</span>
                <div class="reg_box">
                    <p><span class="textinput_label">用户名：</span><input class="text_name" type="text" name="username" value=""></p>
                    <p><span class="textinput_label">密码：</span><input class="text_password" type="password" name="password"></p>
                    <p><span class="textinput_label">确认密码：</span><input class="text_name" type="password"  name="confirmpassword"></p>
                    <p><span class="textinput_label">邮箱：</span><input class="text_name" type="text" name="email"></p>
                    <p><span class="textinput_label">密保问题：</span>
                        <select name="question">
                            {foreach from=$config.questions item=q}
                                <option>{$q}</option>
                            {/foreach}
                        </select>
                    </p>
                    <p><span class="textinput_label">密保答案：</span>
                        <input class="text_name " type="text" 
                               name="answer" placeholder="答案"></p>

                    <p><span class="textinput_label">验证码：</span>
                        <input class="text_name small_width" type="text" name="verifycode"
                               style="float: left;"
                               >
                        <img src="/auth/registerverify" width="100" height="40">
                    </p>
                    <p class="checkbox">
                        <input type="checkbox" name="agree" value="true"><span>我已经阅读并接受</span>
                        <a class="forget_password" href="#">《注册协议和版权声明》</a></p>
                    <p>
                        <input type="submit" class="btn p_bold p_size_14 p_clor_ffffff"  value="注册"/>
                        <a class="btn" href="{site_url('/page/login')}">直接登录</a>
                    </p>
                </div>
                <p class="clear"></p>
            </div>

            {*  <input type="text" name="username" placeholder="用户名">
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
            <input type="submit" value="注册">*}
            <a href="/page/login">直接登录</a>
        </form>
        <div class="content_right">
            <p class="p_size_18 p_bold p_grey1 p_lineHeight_50">还不是会员？</p>
            <a class="btn" href="#">立即注册</a>
            <p class="p_grey1 p_lineHeight_50 p_bold">您还可以通过以下方式登录</p>
        </div>
        <p class="clear"></p>
    </div>
{/block}