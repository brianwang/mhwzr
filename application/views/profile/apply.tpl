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
            "oLanguage": datatablelang
        });
    </script>
{/block}