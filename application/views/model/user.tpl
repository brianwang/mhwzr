<div class='row'>
    <div class="field">
        <span class="field_span">用户名</span>
        <input type="text" name="username" placeholder ="用户名" value='{$model.username}'  
               disabled="true" >
    </div>
    <div class="field">
        <span class="field_span">邮箱</span>
        <input type="text" name="email" placeholder ="邮箱" value='{$model.email}' >
    </div>
</div>   
<div class='row'>
    <div class="field">
        <span class="field_span">QQ</span>
        <input type="text" name="qq" placeholder ="QQ" value='{$model.qq|default: ''}' >
    </div>
    <div class="field">
        <span class="field_span">电话</span>
        <input type="text" name="phone" placeholder ="phone" value='{$model.phone|default: ''}' >
    </div>
</div>
<div class='row'>
    <div class="field">
        <span class="field_span">原始密码</span>
        <input type="password" name="oldpassword" placeholder ="密码">
    </div>
    <div class="field">
        <span class="field_span">更改密码</span>
        <input type="password" name="newpassword" placeholder ="更改密码" >
    </div>
    <div class="field">
        <span class="field_span">确认密码</span>
        <input type="password" name="confirm_password" placeholder ="确认密码">
    </div>
</div>
<div class="row">
    <div class="field">
        <span class="field_span">验证码</span>
        <input type="text" name="postverify" placeholder="验证码" style="float:left;">
        <img src="{site_url('/auth/postverify')}" height="29">
    </div>
</div>
