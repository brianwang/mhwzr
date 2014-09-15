{extends file='layouts/main.tpl'}
{block name=content}
    <img src='{$post.imgurl}' alt="" width="160" height="160"/>
    <p>{$post.name}</p>
    <p>{$post.province}-{$post.city}</p>
    <p>{$post.birthday}</p>
    <p>{$post.gender}</p>
    <p>{$post.description}</p>
    <p>{$post.task}</p>
    <p>{$post.rewards}</p>
    <p>{$post.create_time}</p>
    <a href="#">申请任务</a>
    <a href="#">提供线索</a>
    
    
    <div id="comments">
         评论({$post.comments|count})
        {foreach from=$post.comments|default:[] item=comment}
                {$comment.content}
        {/foreach}
    </div>

{/block}