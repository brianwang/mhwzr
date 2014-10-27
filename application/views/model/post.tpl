{if !$isnew|default:true}
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
{/if}
<div class="field">
    <span class="field_span">一句话描述</span>
    <input type="text" name="title" placeholder ="一句话描述（如：寻找离家孩子)" value='{$model.title}'  style='width:530px;'>
</div>
<div class='row'>
    <div class="field">
        <span class="field_span">该人姓名</span>
        <input type="text" name="name" placeholder ="姓名" value='{$model.name}' >
    </div>
    <div class="field">
        <span class="field_span">该人性别</span>
        {include file='partials/gender.tpl' gender=$model.gender}
    </div>
</div>
<div class='row'>
    <div class="field">
        <span class="field_span">出生年月</span>
        <input class="span2" size="16" type="text" value="{$model.birthday}" name="birthday" placeholder ="出生年月">
        {*<input type="text" name="birthday" placeholder ="出生年月" class="easyui-datebox" value='{$model.birthday}'>*}
    </div>
    <div class="field">
        <span class="field_span">大概位置</span>
        {include file='partials/province.tpl' province=$model.province city=$model.city}
    </div>
</div>
<div class='row'>
    <div class="field">
        <span class="field_span">任务内容</span>
        {include file='partials/task.tpl' task= $model.task}
    </div>
    <div class="field">
        <span class="field_span">任务性质</span>
        {include file='partials/type.tpl' type=$model.type}
    </div>
</div>
<div class='row'>
    <div class="field"  id="gy">
        <span class="field_span">奖励金额</span>
        <select name='rewards'>
            {for $r=100 to 300 step=100}
                <option value="{$r}" {if $r== $model.rewards}selected{/if}> {$r}猴王币</option>
            {/for}
        </select>
    </div>

    <div class="field">
        <span class="field_span">有效期</span>
        <select name='duration'>
            {for $k=1 to 3}
                <option value="{$k}"{if $k== $model.duration}selected{/if}>{$k}个月</option>
            {/for}
        </select>
    </div>
</div>
<div class="field">
    <span class="field_span">详细描述</span>
    <textarea name='description' class="description" style='width:530px;'>{$model.description}</textarea>
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
        });
    }
    // var province = $(e.target).val();
    getcity(p);
    $('select[name=province]').change(function (e) {
        var province = $(e.target).val();
        getcity(province);
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
</script>