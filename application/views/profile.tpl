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
                    发布记录</a></li>
            <li class="pay_list_item">
                <a href="#applylog">
                    申请记录</a></li>
            <li class="pay_list_item">
                <a href="#recharge">
                    续费</a></li>
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
                    <form action='{site_url('/user/saveprofile')}' method='post' id="profileform">
                        {include file='model/user.tpl' model=$user}
                        <input type='submit' class="btn" value="保存">
                    </form>
                    <script>
                        $("#profileform").validate({
                            rules: {
                                username: {
                                    required: true
                                },
                                email: {
                                    required: true,
                                    email: true
                                },
                                qq: {
                                    required: true
                                }
                            },
                            messages: {
                                name: "Required Field"
                            },
                            submitHandler: function (form) {
                                // some other code
                                // maybe disabling submit button
                                // then:
                                $(form).submit();
                            }
                        });
                    </script>
                </div>
            </div>
            <div class='postlog'>
                <p class="right_title">发布记录</p>
                <div class="right_content">
                    <table>


                    </table>
                </div>
            </div>
            <div class='applylog'>
                <p class="right_title">申请记录</p>
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