{assign var="contenttitle" value="个人信息" scope=parent}
{extends file='profile/layout.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    <link rel="stylesheet" href="{asset_url('dt/media/css/jquery.dataTables.css')}" />
    <script src="{asset_url('/dt/media/js/jquery.dataTables.js')}"></script>
{/block}
{block name=profilecontent}
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
    <script>
        $('#example').dataTable({
            "serverSide": true,
            "paging": true,
            "ajax": {
                "url": '{site_url('/post/myapply')}',
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