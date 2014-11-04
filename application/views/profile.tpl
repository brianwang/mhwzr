{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
{/block}
{block name=pagebody}
    <div class="content center">
        <ul class="pay_content_left">
            <li class="left_title">个人中心</li>
            <li class="pay_list_item select">
                <a href="#profile">个人信息</a></li>
            <li class="pay_list_item">
                <a href="#postlog">
                    寻人日志</a></li>
            <li class="pay_list_item">
                <a href="#message">
                    私信</a></li>
            <li class="pay_list_item">
                <a href="#recharge">
                    充值记录</a></li>
            <li class="pay_list_item">
                <a href="#consume">
                    消费记录</a></li>
        </ul>
        <div class="pay_content_right">
            <div class='profile'>
                <p class="right_title">个人信息</p>
                <div class="right_content">

                </div>
            </div>
            <div class='postlog'>
                <p class="right_title">寻人日志</p>
                <div class="right_content">

                </div>
            </div>
            <div class='message'>
                <p class="right_title">私信</p>
                <div class="right_content">

                </div>
            </div>
            <div class='recharge'>
                <p class="right_title">充值记录</p>
                <div class="right_content">

                </div>
            </div>
            <div class='consume'>
                <p class="right_title">消费记录</p>
                <div class="right_content">

                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <script>
            $('.pay_list_item a').click(function (e) {
                $('.pay_list_item').each(function (i, e) {
                    $(e).removeClass('select');
                    var t = $(e).find('a').attr('href').substring(1);
                    $('.' + t).hide();
                });
                $(e.target).parent().addClass('select');
                var tdiv = $(e.target).attr('href').substring(1);
                $('.' + tdiv).show();
            });
        </script>
    {/block}