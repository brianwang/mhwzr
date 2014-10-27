{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
{/block}
{block name=pagebody}
    <div class="content center">

        <ul class="pay_content_left">
            <li class="left_title">充值中心</li>
            <li class="pay_list_item select"><a href="#alipay"><img src="{asset_url('img/pixel.gif')}" class="icon icon_zhifubao">支付宝</a></li>
            <li class="pay_list_item"><a href="#unionpay"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank">银联支付</a></li>
        </ul>
        <div class="pay_content_right">
            <div class='alipay'>
            <p class="right_title">支付宝充值</p>
            <div class="right_content">
                <p class="recharge_input"><span class="span1">充值:	</span><input type="text"><span class="span2">猴王币</span></p>
                <p class="recharge_amount">付款：<span class="p_yellow p_bold"> 0 </span>元</p>
                <p class="clear"></p>
                <a class="recharge_btn" href="#">立即充值</a>
            </div>
        </div>
            <div class="right_content unionpay" style="display: none;">
                <p class="recharge_input"><span class="span1">充值:	</span><input type="text"><span class="span2">猴王币</span></p>
                <p class="recharge_amount">付款：<span class="p_yellow p_bold"> 0 </span>元</p>
                <div class="blank_box">
                    <p>请选择付款银行</p>
                    <ul class="blank_list">
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                        <li class="item"><input type="radio" name="blank_name"><img src="{asset_url('img/pixel.gif')}" class="icon icon_blank_item1 p_icon"></li>
                    </ul>
                </div>
                <p class="clear"></p>
                <a class="recharge_btn" href="#">立即充值</a>
            </div>
        </div>
        <p class="clear"></p>
    </div>
    <script>
        $('.pay_list_item a').click(function (e) {
            $('.pay_list_item').each(function(i,e){
                    $(e).removeClass('select');
                    var t = $(e).find('a').attr('href').substring(1);
                    $('.'+t).hide();
            });
            $(e.target).parent().addClass('select');
            var tdiv= $(e.target).attr('href').substring(1);
            $('.'+tdiv).show();
        });
    </script>
{/block}