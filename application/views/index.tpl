{extends file='layouts/main.tpl'}
{block name=content}
    <div class="banner">
        <div class="imglist center">
            <img src="{asset_url('img/banner.png')}"/>
        </div>
    </div>
    <div class="content center">
        <div class="nav">
            <ul>
                <li class="box_title bg_0">服务内容</li>
                <li class="box_content bg_1">
                    <p class="p_title">我要找人</p>
                    <p class="p_content"><a href="#">手机找人</a> <a href="#">姓名找人</a> <a href="#">照片找人</a> <a href="#">QQ找人</a> <a href="#">邮箱找人</a></p>
                    <p class="clear"></p>
                </li>
                <li class="box_content bg_2">
                    <p class="p_title">我能找人</p>
                    <p class="p_content"><a href="#">手机找人</a> <a href="#">姓名找人</a> <a href="#">照片找人</a> <a href="#">QQ找人</a> <a href="#">邮箱找人</a></p>
                    <p class="clear"></p>
                </li>
                <li class="box_content bg_3">
                    <p class="p_title">公益找人</p>
                    <p class="p_content"><a href="#">失踪儿童</a> <a href="#">失联老人</a> <a href="#">妻子不见</a> <a href="#">寻找嫂子</a></p>
                    <p class="clear"></p>
                </li>
                <li class="box_foot">
                    <p class="p_title">200W用户在美猴王找人</p>
                    <a href="#"><img src="{asset_url('img/top.png')}"/></a>
                    <div class="img_title">
                        <p>寻找失散多年的姐妹</p>
                        <p>仅有照片和身份证</p>
                    </div>
                    <img src="{asset_url('img/pixel.gif')}" class="icon icon_success"/>
                </li>
            </ul>
        </div>
        <div class="notice bg_4">
            <img class="icon horn" src="{asset_url('img/pixel.gif')}"><p class="p_title">平台规则变更通知</p>
            <div class="notice_box">
                <ul class="list">
                    <li class="item">
                        <span class="msg_time">20:33</span><span class="p_yellow msg_type">寻人任务</span>

                        <p class="p_grey1 msg_content"><span class="p_blue">葡萄家的底层民工</span> 发布了一个 照片寻人</p>
                    </li>
                    <li class="item">
                        <span class="msg_time">20:33</span><span class="p_clor_24c1a4 msg_type">公益寻人</span>
                        <p class="p_grey1 msg_content"><span class="p_blue">逗逼思密达</span> 发布了一个 公益寻人</p>
                    </li>
                </ul>
            </div>
            <ul class="list1">
                <li class="item">
                    <img src="{asset_url('img/pixel.gif')}" class="icon transaction">
                    <p class="p_1">担保交易</p>
                    <p class="p_2">验收工作后再付款</p>
                </li>
                <li class="item">
                    <img src="{asset_url('img/pixel.gif')}" class="icon guarantee">
                    <p class="p_1">平台仲裁</p>
                    <p class="p_2">千万保障金先行赔付</p>
                </li>
                <li class="item">
                    <img src="{asset_url('img/pixel.gif')}" class="icon arbitration">
                    <p class="p_1">实名认证</p>
                    <p class="p_2">实名认证，放心交易</p>
                </li>
            </ul>
        </div>
        <div class="task">
            <div class="task_box">
                <div class="tast_title">
                    <p class="p_title p_size_20 p_grey2 p_bold"><span class="p_yellow p_size_24 p_bold">今日寻人</span> 任务板</p>
                </div>
                <ul>
                    <li><a href="#" class="p_size_14"><span class="p_blue">葡萄家的底层民工</span> 发布了 一个照片寻人,悬赏 <span class="p_yellow p_bold">3866</span> 元。</a></li>
                    <li><a href="#" class="p_size_14"><span class="p_blue">王翔宇</span> 发布了 一个寻人,提供照片，手机号，原住址，悬赏 <span class="p_yellow p_bold">103866</span> 元。</a></li>
                    <li><a href="#" class="p_size_14"><span class="p_blue">葡萄家的底层民工</span> 发布了 一个照片寻人,悬赏 <span class="p_yellow p_bold">3866</span> 元。</a></li>
                </ul>
            </div>
            <div class="task_box">
                <div class="tast_title">
                    <img src="{asset_url('img/pixel.gif')}" class="icon icon_tast"/><p class="p_title  p_size_20 p_grey2 p_indent_55 p_bold"><span class="p_yellow p_size_24 p_bold">公益找人</span> 任务板</p>
                </div>
                <ul>
                    <li><a href="#" class="p_size_14"><span class="p_blue">葡萄家的底层民工</span> 发布了 一个照片寻人。</a></li>
                    <li><a href="#" class="p_size_14"><span class="p_blue">王翔宇</span> 发布了 一个寻人,提供照片，手机号，原住址。</a></li>
                    <li><a href="#" class="p_size_14"><span class="p_blue">葡萄家的底层民工</span> 发布了 一个照片寻人。</a></li>
                </ul>
            </div>
            <div class="tast_foot">
                <a href="#" class="button">找人经验分享</a>
                <a href="#">团队坚持信誉品质 依托平台四个月赚四十万</a>
                <a href="#">兼职接单照顾宝宝两不误 全职妈妈过起了威客生活</a>
            </div>
        </div>
    </div>
    <div class="technological">
        <div class="center">
            <p class="p_size_24 p_bold p_lineHeight_70 technological_title"><span class="p_yellow">找人</span>  我们更专业  <span class="p_yellow">500W会员</span>  总有一个帮到您</p>
            <img src="{asset_url('img/liucheng.png')}"/>
            <p class="right"><a href="#">详细介绍</a><span class="p_grey"> | </span><a href="#">发布找人需求</a><span class="p_grey"> | </span><a href="#">找人经验</a> </p>
        </div>
    </div>
    <div class="content_list center">
        {foreach from=$top4 item=p key=k}
            <div class="item bg_4 {if $k%2!=0 }margin_left{/if}">
                <img src="{if $p.imgurl}{$p.imgurl}{else}{asset_url('/img/item_head.jpg')}{/if}" />
                <div class="content">
                    <p class="p_bold p_size_18  p_grey2">{$p.title}</p>
                    <p class="p_size_14 p_grey2 p_lineHeight_40">{$p.name}   {$p.gender}   {if $p.age}{$p.age}岁{/if} </p>
                    <p class="p_size_14 p_grey2 p_lineHeight_30">{$p.description}</p>
                </div>
                <p class="img_title {if $p.type == '公益类'}}bg_4{else}bg_6{/if} p_bold">{$p.type|cat:'寻人'}</p>
            </div>
        {/foreach}
    </div>
    <p class="clear"></p>
{/block}