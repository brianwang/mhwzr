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
                <th>内容</th>
                <th>来自</th>
                <th>时间</th>
                <th></th>
            </tr>
        </thead>
    </table>
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
                "url": '{site_url('/message/my')}',
                "data": function (d) {
                    console.log(d);
                }
            },
            "columns": [
                {
                    "data": "title"},
                {
                    "data": "content"},
                {
                    "data": "from"},
                {
                    "data": "create_time"}
            ],
            "oLanguage":datatablelang
        });
    </script>
{/block}
