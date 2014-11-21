{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    
{/block}
{block name=pagebody}
    <div class='profile'>
        <h2 class="profiletitle">个人信息</h2>
        <div class="content">
            <div class='row'>
                <div class="field">
                    <span>
                        <img src="{$user.headurl|default: asset_url('/img/default_head.jpg')}" alt="" width="64px" height="64px"/>
                    </span>
                </div>
                <div class="field">
                    <span class="field_span">用户名</span>
                    <span class="field_span">{$user.username}</span>

                </div>
            </div>
            <div class='row'>
                <div class="field" style='width: 64px;'>
                </div>
                <div class="field">
                    <span class="field_span">邮箱</span>
                    <span class="field_span">{$user.email}</span>
                </div>
            </div>   
            <div class="row">
                <div class="field" style='width: 64px;'>
                </div>
                <div class='field'>
                    <span class="field_span">用户简介</span>
                    <span class="field_span">{$user.description|default: '暂时没有该用户介绍'}</span>
                </div>
            </div>
            <div class="row">
                <div class="field" style='width: 64px;'>
                </div>
                <div class='field'>
                    <a href="#" class="btn">发私信</a>
                </div>
            </div>
        </div>
    </div>
{/block}