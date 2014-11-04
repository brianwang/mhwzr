{extends file='layouts/page_content.tpl'}
{block name=pagebody}
    <div>
        {$message|default:''}，正在跳转<span id="timer">3</span>秒

        <script>
            var time = 3;
            setInterval(function () {
                $('#timer').html(time);
                time--;
                if (time == 0) {
                    window.location.href = '{$url}';
                }
            }, 1000);
        </script>
    </div>
{/block}