{extends file='layouts/main.tpl'}
{block name=content}
    <div>
        <form action="{site_url('/post/save')}" 
              method="post" enctype="multipart/form-data" 
              style="width: 960px;" class="form center">
            {include file='model/post.tpl' isnew=false model=null isedit=false}
            <div>
                <input type='submit' value="提交" class="btn">
                <input type='button' value="重置" class="btn">
            </div>
        </form>
    </div>
{/block}