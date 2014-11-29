{assign var="contenttitle" value="个人信息" scope=parent}
{extends file='profile/layout.tpl'}
{block name=header}
    <link rel="stylesheet" href="{asset_url('css/pay.css')}" />
    <link rel="stylesheet" href="{asset_url('dt/media/css/jquery.dataTables.css')}" />
    <script src="{asset_url('/dt/media/js/jquery.dataTables.js')}"></script>
{/block}
{block name=profilecontent}
    <table id="recharge" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>充值金额</th>
                <th>类型</th>
                <th>日期</th>
                <th>状态</th>
            </tr>
        </thead>
    </table>
    <script>
        $('#recharge').dataTable({
            "serverSide": true,
            "paging": true,
            "ajax": {
                "url": '{site_url('/recharge/my')}',
                "data": function (d) {
                    console.log(d);
                }
            },
            "columns": [
                {
                    "data": "amoutn"},
                {
                    "data": "type"},
                {
                    "data": "c_time"},
                {
                    "data": "status"}
            ],
            "oLanguage":datatablelang
        });

    </script>
{/block}