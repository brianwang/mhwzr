{extends file='layouts/main.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/page_list.css')}" />
{/block}
{block name=content}
    <div class="content center">
        <div class="page_nav">
            <ul>
                <li class="box_title bg_0">服务内容</li>
            </ul>
        </div>
        <p class="p_lineHeight_50"><a href="/" class="p_grey3">首页</a><span class="p_grey3"> > </span><a href="#" class="p_grey3">服务</a><span class="p_grey3"> > </span><a href="#" class="p_grey3">我要找人</a></p>
        <div class="content_left">
            <div class="search_box bg_4">
                <ul class="nav_1">
                    <li>服务：</li>
                    <li><a href="#" class="select">全部</a></li>
                    <li><a href="#">找人</a></li>
                    <li><a href="#">公益寻人</a></li>
                </ul>

                <ul class="nav_2">
                    <li>赏金：</li>
                    <li><a href="#" class="select">全部</a></li>
                    <li><a href="#">未托管赏金</a></li>
                    <li><a href="#">已托管赏金</a></li>
                </ul>

                <ul class="nav_3">
                    <li>时间：</li>
                    <li><a href="#" class="select">全部</a></li>
                    <li><a href="#">加急委托</a></li>
                    <li><a href="#">限时委托</a></li>
                </ul>
            </div>
            <div class="page_contenter">
                <ul class="contenter_nav p_size_16">
                    <li {if current_url() == site_url('/page/items/'|cat: $curpage|cat:'/going') }class="select"{/if}>
                        <a href="{site_url('/page/items')}/{$curpage}/going"
                           {if current_url() == site_url('/page/items/'|cat: $curpage|cat:'/going') }
                               class="p_clor_ffffff"{/if}>进行中</a></li>
                        <li  {if current_url() == site_url('/page/items/'|cat: $curpage|cat:'/finish') }class="select"{/if}>
                            <a href="{site_url('/page/items')}/{$curpage}/finish"
                               {if current_url() == site_url('/page/items/'|cat: $curpage|cat:'/finish') }
                                   class="p_clor_ffffff"{/if}>完美结束</a>
                            </li>
                        </ul>
                        <ul class="contenter_title">
                            <li><a href="#" class="border_no_right select">综合</a></li>
                            <li><a href="#" class="border_no_right addArror">发布时间<img src="{asset_url('img/pixel.gif')}" class="icon icon_arror_bottom"></img></a></li>
                            <li><a href="#" class="border_no_right addArror">剩余时间<img src="{asset_url('img/pixel.gif')}" class="icon icon_arror_bottom"></img></a></li>
                            <li><a href="#" class="border_no_right addArror">参与数<img src="{asset_url('img/pixel.gif')}" class="icon icon_arror_bottom"></img></a></li>
                            <li><a href="#" class="border_all addArror">价格<img src="{asset_url('img/pixel.gif')}" class="icon icon_arror_bottom"></img></a></li>
                            <li><a href="#" class="border_all combobox addArror">所有价格<img src="{asset_url('img/pixel.gif')}" class="icon icon_arror1_bottom"></img></a></li>
                        </ul>
                        <ul class="contenter_title_right">
                            <li><a href="#"><img src="{asset_url('img/pixel.gif')}" class="icon icon_arror1_left"></img></a></li>
                            <li><a href="#"><img src="{asset_url('img/pixel.gif')}" class="icon icon_arror1_right"></img></a></li>
                        </ul>
                        <ul class="contenter_data_box">
                            <li class="box_title"><span class="b_1">标题/赏金</span><span class="b_2">状态</span><span class="b_3">所在地</span><span class="b_4">时间</span></li>
                                {foreach from=$posts  item=post}
                                <li class="box_item">
                                    <span class="b_1">
                                        <img src="{asset_url('img/pixel.gif')}" class="icon icon_{if $post.type == '悬赏类'}shang{else}gong{/if}"></img><span class="item_title">{$post.title}</span>
                                        <span class="item_content"><span class="p_size_14 p_yellow p_bold">￥{$post.rewards}</span> <span class="p_grey3">{$post.browsers|default:0}人浏览 / {$post.bidscount|default:0}人已经投标</span></span>
                                    </span>
                                    <span class="b_2">{$config['status'][$post.status]}</span>
                                    <span class="b_3">{$post.province}-{$post.city}</span>
                                    <span class="b_4">{$post.duration}个月</span>
                                </li>
                            {/foreach}
                        </ul>
                        <div class="contenter_footer">
                            <div class="list_search icon icon_list_search_bg">
                                <input type="text" placeholder="快速搜索需求" class="p_grey list_search_input"/>
                                <a href="#"><img src="{asset_url('img/pixel.gif')}" class="icon icon_list_search"/></a>
                            </div>
                            <ul>
                                <li><a href="#" class="icon_page_left_a"><<</a></li>
                                    {for $page=1 to $pages}
                                    <li><a href="#" class="icon_page_center_a 
                                           {if $page == $curpage}select{/if}">{$page}</a></li>
                                    {/for}
                                <li><a href="#" class="icon_page_right_a">>></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content_right">
                    <div class="right_box">
                        <p class="p_lineHeight_40 p_size_14 p_bold">我也要发布找人</p>
                        <input type="text" class="textInput" placeholder="请输入标题"/>
                        <p class="p_lineHeight_40">请勾选线索</p>
                        <form>
                            <div class="item">
                                <input type="checkbox" class="checkbox"/><span>照片</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" class="checkbox"/><span>身份证</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" class="checkbox"/><span>QQ</span>
                            </div>
                            <div class="item">
                                <input type="checkbox" class="checkbox"/><span>手机号</span>
                            </div>
                        </form>
                        <textarea name="" rows="" cols="" placeholder="其他你认为重要的线索"></textarea>
                        <a href="#" class="right_search">发布找人</a>
                        <p class="clear"></p>
                    </div>
                </div>
                <p class="clear"></p>
            </div>
            {/block}