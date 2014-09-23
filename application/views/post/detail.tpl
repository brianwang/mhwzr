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
    <form action="{site_url('/user/apply')}/{$post.id}" method="post">
        <input type="submit" value="申请任务"/>
    </form>
    <form>
        <input type="submit" value="提供线索"/>
    </form>

    <div id="comments">
        评论({$post.comments|count})
        {foreach from=$post.comments|default:[] item=comment}
            {$comment.content}
        {/foreach}
    </div>

{/block}