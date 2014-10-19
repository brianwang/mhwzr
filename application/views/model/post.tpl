{if !$isedit}
    <div>
        <span class="field_span">身份证文件</span>
        <input type="file" name="identity">
    </div>
{else}
    {if $model.imgurl == ''}
        <div>
            <span class="field_span">身份证文件</span>
            <input type="file" name="identity">
        </div>
    {else}
        <img src="{$model.imgurl|default:''}" width=160 heigh=160>
    {/if}
    <input type='hidden' name='id' value='{$model.id}'>
    <div>
        <span class="field_span">状态</span>
        {include file='partials/status.tpl' status=$model.status}
    </div>
{/if}
<div>
    <span class="field_span">姓名</span>
    <input type="text" name="name" placeholder ="姓名" value='{$model.name}' >
</div>
<div>
    <span class="field_span">一句话描述</span>
    <input type="text" name="title" placeholder ="一句话描述（如：寻找离家孩子)" value='{$model.title}'  >
</div>
<div>
    <span class="field_span">性别</span>
    {include file='partials/gender.tpl' gender=$model.gender}
</div>
<div>
    <span class="field_span">寻人类型</span>
    {include file='partials/type.tpl' type=$model.type}
</div>
<div>
    <span class="field_span">出生年月</span>
    <div class="input-append date" id="dp3" data-date-format="yyyy-mm-dd">
        <input class="span2" size="16" type="text" value="{$model.birthday}" name="birthday" placeholder ="出生年月">
        <span class="add-on"><i class="fa fa-th"></i></span>
    </div>
    {*<input type="text" name="birthday" placeholder ="出生年月" class="easyui-datebox" value='{$model.birthday}'>*}
</div>
<div>
    <span class="field_span">所在地</span>
    {include file='partials/province.tpl' province=$model.province city=$model.city}
</div>
<div>
    <span class="field_span">奖励金额</span>
    <select name='rewards'>
        {for $r=100 to 300 step=100}
            <option value="{$r}" {if $r== $model.rewards}selected{/if}> {$r}</option>
        {/for}
    </select>
</div>
<div>
    <span class="field_span">所在地</span>
    {include file='partials/task.tpl' task= $model.task}
</div>
<div>
    <span class="field_span">有效期</span>
    <select name='duration'>
        {for $k=1 to 3}
            <option value="{$k}"{if $k== $model.duration}selected{/if}>{$k}个月</option>
        {/for}
    </select>
</div>
<div>
    <textarea name='description'>{$model.description}</textarea>
</div>
