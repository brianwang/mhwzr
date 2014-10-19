{extends file='layouts/main.tpl'}
{block name=content}
    <div>
        <form action="{site_url('/post/save')}" 
              method="post" enctype="multipart/form-data" 
              style="width: 400px;" class="form center">
            {include file='model/post.tpl'}
            <div>
                <input type='submit' value="提交">
                <input type='button' value="重置">
            </div>
        </form>
    </div>

{/block}