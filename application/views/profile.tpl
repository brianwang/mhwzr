{extends file='layouts/page_content.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    <link rel="stylesheet" href="{asset_url('dt/media/css/jquery.dataTables.css')}" />
    <script src="{asset_url('/dt/media/js/jquery.dataTables.js')}"></script>
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
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>标题</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>有效期</th>
                                <th>状态</th>
                                <th>发布时间</th>
                            </tr>
                        </thead>
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
            $('#example').dataTable({
                "serverSide": true,
                "paging": true,
                "ajax": {
                    "url": '{site_url('/post/my')}',
                    "data": function (d) {
                        console.log(d);
                    }
                },
                "columns": [
                    {
                        "data": "title"},
                    {
                        "data": "posttype"},
                    {
                        "data": "rewards"},
                    {
                        "data": "duration"},
                    {
                        "data": "status"},
                    {
                        "data": "create_time"}
                ],
                "oLanguage": {
                    "sLengthMenu": "每页显示 _MENU_ 条记录",
                    "sZeroRecords": "没有检索到数据",
                    "sInfo": "当前数据为从第 _START_ 到第 _END_ 条数据；总共有 _TOTAL_ 条记录",
                    "sInfoEmtpy": "没有数据",
                    "sProcessing": "正在加载数据...",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "前页",
                        "sNext": "后页",
                        "sLast": "尾页"
                    }
                }
            });
        </script>
    {/block}