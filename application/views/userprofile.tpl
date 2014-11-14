{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
{/block}
{block name=pagebody}

    <div class="pay_content_right">
        <div class='profile'>
            <p class="right_title">个人信息</p>
            <div class="right_content">
                <div class='row'>
                    <div class="field">
                        <span class="field_span">用户名</span>
                        <span>{$user.username}</span>
                    </div>
                    <div class="field">
                        <span class="field_span">邮箱</span>
                        <span>{$user.email}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}