{*    {if !$isnew|default:true}
{if !$isedit}
<div class="field">
<span class="field_span">身份证文件</span>
<input type="file" name="identity">
</div>
{else}
{if $model.imgurl == ''}
<div class="field">
<span class="field_span">身份证文件</span>
<input type="file" name="identity">
</div>
{else}
<img src="{$model.imgurl|default:''}" width=160 heigh=160>
{/if}
<input type='hidden' name='id' value='{$model.id}'>
<div class="field">
<span class="field_span">状态</span>
{include file='partials/status.tpl' status=$model.status}
</div>
{/if}
{/if}*}
<div class="field">
    <span class="field_span">发布消息类型</span>
    <select name="posttype">
        <option value="s">寻人启示</option>
        <option value="t">担保任务</option>
    </select>
</div>
<div id="s">        
    <div class='row'>
        <div class="field">
            <span class="field_span">他的姓名</span>
            <input type="text" name="name" placeholder ="姓名" value='{$model.name}' >
        </div>
        <div class="field">
            <span class="field_span">他的性别</span>
            {include file='partials/gender.tpl' gender=$model.gender}
        </div>
    </div>
    <div class='row'>
        <div class="field">
            <span class="field_span">大概年龄</span>
            <input class="span2" size="16" type="text" value="{$model.age}" name="age" placeholder ="大概年龄">        
        </div>
        <div class="field">
            <span class="field_span">走失区域</span>
            {include file='partials/province.tpl' province=$model.province city=$model.city}
        </div>
    </div>
    <div class='row'>
        <div class="field">
            <span class="field_span">任务性质</span>
            {include file='partials/type.tpl' type=$model.type}
        </div>
        <div class="field"  id="gy">
            <span class="field_span">奖励金额</span>
            <input type="text" name="rewards" placeholder="奖励金额">
        </div>
    </div>
</div>
<div id="t">
    <div class="field">
        <span class="field_span">一句话描述</span>
        <input type="text" name="title" placeholder ="一句话描述（如：寻找离家孩子)" value='{$model.title}'  style='width:530px;'>
    </div>
    <div class="field">
        <span class="field_span">有效期</span>
        <input type="text" name="duration" placeholder="有效期" value="{$model.duration|default: 30}">天
    </div>
    <div class="field">
        <span class="field_span">详细描述</span>
        <textarea name='description' class="description" style='width:530px;'>{$model.description}</textarea>
    </div>
</div>

<hr/>
<div class='row'>
    <div class="field">
        <span class="field_span">你的姓名</span>
        <input type="text" name="creator" placeholder ="姓名" value='{$smarty.session.user.username}' >
        <input type="hidden" name="uid"  value='{$smarty.session.user.id}' >
         <input type="hidden" name="status"  value='{$model.status|default: '进行中'}' >
    </div>
    <div class="field">
        <span class="field_span">是否公开</span>
        <select name="ispublic">
            <option value="0">不公开</option>
            <option value="1">公开</option>
        </select>
    </div>
</div>
<div class='row'>
    <div class="field">
        <span class="field_span">联系电话</span>
        <input type="text" name="phone" placeholder ="联系电话" value='{$smarty.session.user.phone}' >
    </div>
    <div class="field">
        <span class="field_span">QQ/邮箱</span>
        <input type="text" name="email" placeholder ="QQ/邮箱" value='{$smarty.session.user.email}' >
    </div>
</div>
<div class="field">
    <span class="field_span">验证码</span>
    <input type="text" name="postverify" placeholder="验证码" style="float:left;">
    <img src="{site_url('/auth/postverify')}" height="29">
</div>
<script>
    var p = $('select[name=province]').val();
    function getcity(province) {
        $.get('/api/city/' + province, function (data) {
            data = JSON.parse(data);
            var options = '';
            for (var i = 0; i < data.length; i++) {
                options += '<option value=' + data[i] + '>' + data[i] + '</option>';
            }
            $('select[name=city]').html(options);
            var city = $('select[name=city]').val();
            getarea(province, city);
        });
    }
    function getarea(province, city) {
        $.get('/api/area/' + province + '/' + city, function (data) {
            data = JSON.parse(data);
            var options = '';
            for (var i = 0; i < data.length; i++) {
                options += '<option value=' + data[i] + '>' + data[i] + '</option>';
            }
            $('select[name=area]').html(options);
        });
    }
    // var province = $(e.target).val();
    getcity(p);
    $('select[name=province]').change(function (e) {
        var province = $(e.target).val();
        getcity(province);

    });

    $('select[name=city]').change(function (e) {
        var city = $(e.target).val();
        var province = $('select[name=province').val();
        getarea(province, city);
    });

    $('select[name=type]').change(function (e) {
        var t = $(e.target).val();
        if (t == '悬赏找人') {
            $('#gy').show();
        } else {
            $('#gy').hide();
        }
    });
    $('#gy').hide();
    /*$('select[name=posttype]').change(function (e) {
     var v = $(e.target).val();
     if (v == 's') {
     $('#s').show();
     } else {
     $('#s').hide();
     }
     });*/
</script>