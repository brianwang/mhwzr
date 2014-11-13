{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/page_content.css')}" />
{/block}
{block name=pagebody}
    <div class="content center">
        <div class="page_nav">
            <ul>
                <li class="box_title bg_0">服务内容</li>
            </ul>
        </div>
        <p class="p_lineHeight_50"><a href="#" class="p_grey3">首页</a><span class="p_grey3"> &gt; </span><a href="#" class="p_grey3">服务</a><span class="p_grey3"> &gt; </span><a href="#" class="p_grey3">我要找人</a></p>
        <div class="content_left">
            <div class="content_left_box padding_bottom">
                <div class="left_header  bg_4">
                    <img class="img_header" src="{$post.imgurl|default: ''}">
                    <p class="content_title p_size_20 p_bold p_grey1 p_lineHeight_40">{$post.title}</p>
                    <p class="content_title1 p_size_14 p_bold p_lineHeight_30">
                        {if $post.posttype == 't' and $post.type=='悬赏找人'}
                            <span class="p_yellow">赏金：{$post.rewards}元</span>
                        {/if}
                        <span class="p_grey3">日期：{$post.create_time}</span></p>
                </div>
                <p class="p_lineHeight_50 p_bold p">找人线索:</p>
                <p class="p_lineHeight_30 p"><span class='leftcontent'>性别:</span><span class='rightcontent'>{if $post.gender==0}男{else}女{/if}</span></p>
                <p class="p_lineHeight_30 p"><span class='leftcontent'>年龄:</span><span class='rightcontent'>{$post.age}</span></p>
                <p class="p_lineHeight_30 p"><span class='leftcontent'>所在地区:</span><span class='rightcontent'>{$post.province}-{$post.city}-{$post.area}</span></p>
                <p class="p_lineHeight_30 p"><span class='leftcontent'>详细描述:</span><span class='rightcontent'>{$post.description}</span></p>
                <div class="circle_bot">
                    <span class="s_b"> 
                        <b class="b1  bg_fff8ec"></b> 
                        <b class="b2  bg_fff8ec"></b>
                    </span>
                    <div class="info  bg_fff8ec p_lineHeight_30 text_center">
                        涉及个人隐私，缴纳保证金后方可查看
                    </div>
                    <span class="s_b">
                        <b class="b2 bg_fff8ec"></b>
                        <b class="b1 bg_fff8ec"></b>
                    </span>
                </div>
                <a class="btn_search p_clor_ffffff p_bold p_size_18" href="javascript:;" id="icando">我能找到</a>
            </div>
            <div class="content_left_box">
                <p class="p_lineHeight_40">已参与找人({$applyusers|count}人)</p>
                <ul class="pic_list">
                    {foreach from=$applyusers item=u}
                        <li><a href="{site_url('/page/profile')}/{$u.id}"><img src="{$u.imgurl}" width="45px" height="45px"></a></li>
                            {/foreach}
                </ul>
                <p class="clear"></p>
            </div>

            <div class="content_left_box">
                <p class="p_lineHeight_40">寻人交流</p>
                <form>
                    <textarea name="" rows="" cols=""></textarea>
                    <a class="btn bg_dedede" href="#">发布</a>
                </form>
                <p class="clear"></p>
            </div>
            {foreach from=$comments item=comment}
                <div class="content_left_box padding_top">
                    <img class="img_header" width="45px" height="45px" src="{$post.imgurl}">
                    <p class="p_lineHeight_25 p_indent_15">{$comment.username}</p>
                    <p class="p_grey3 p_indent_15">{$comment.create_time}</p>
                    <div class="content">
                        <p class="p_content">{$comment.content}</p>
                        <div class="content_box">
                            <textarea name="" rows="" cols=""></textarea>
                            <a class="btn bg_dedede" href="#">评论</a>
                            <p class="clear"></p>
                            {foreach from=$comment.comments item=c}
                            <div class="item boder_bottom">
                                <img class="img_header" width="45px" height="45px" src="img/item_head1.jpg">
                                <p class="p_lineHeight_25 p_indent_15">{$c.username}</p>
                                <p class="p_grey3 p_indent_15">{$c.create_time}</p>
                                <p class="p_content p_indent_15">{$c.content}</p>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
        <div class="content_right">
            <div class="right_box">
                <p class="p_lineHeight_40 p_size_14 p_bold">我也要发布找人</p>
                <input type="text" class="textInput" value="请输入标题">
                <p class="p_lineHeight_40">请勾选线索</p>
                <form>
                    <div class="item">
                        <input type="checkbox" class="checkbox"><span>照片</span>
                    </div>
                    <div class="item">
                        <input type="checkbox" class="checkbox"><span>身份证</span>
                    </div>
                    <div class="item">
                        <input type="checkbox" class="checkbox"><span>QQ</span>
                    </div>
                    <div class="item">
                        <input type="checkbox" class="checkbox"><span>手机号</span>
                    </div>
                </form>
                <textarea name="" rows="" cols="">其他你认为重要的线索</textarea>
                <a href="#" class="right_search">发布找人</a>
                <p class="clear"></p>
            </div>
        </div>
        <p class="clear"></p>
    </div>




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