{extends file='layouts/main.tpl'}
{block name=content}
    <form action="{site_url('/post/create')}" method="post" enctype="multipart/form-data" >
         <input type="file" name="identity">
        <input type="text" name="name" placeholder ="姓名">
        <select name="gender">
            <option value="1">男</option>
            <option value="0">女</option>
        </select>
         <select name="type">
            <option value="shang">悬赏类</option>
            <option value="gong">公益类</option>
        </select>
        <input type="text" name="birthday" placeholder ="出生年月">
        {include file='partials/province.tpl'}
        <select name='rewards'>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
        </select>
        <select name='task'>
            <option>查QQ</option>
            <option>查身份证</option>
            <option>查住址</option>            
        </select>
        <select name='duration'>
            <option value="1">1个月</option>
            <option value="2">2个月</option>
            <option value="3">3个月</option>            
        </select>
        <textarea name='description'></textarea>
        <input type='submit' value="提交">
        <input type='button' value="重置">
    </form>

{/block}