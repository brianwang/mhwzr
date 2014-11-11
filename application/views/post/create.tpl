{extends file='layouts/main.tpl'}
{block name=content}
    <div>
        <form action="{site_url('/post/save')}" 
              method="post" enctype="multipart/form-data" 
              style="width: 960px;" class="form center" id="postform">
            {include file='model/post.tpl' isnew=false model=null isedit=false}
            <div>
                <input type='submit' value="提交" class="btn">
                <input type='button' value="重置" class="btn">
            </div>
        </form>
        <script>
            var userrules = {
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                qq: {
                    required: true
                }, creator: {
                    required: true
                },
                phone: {
                    required: true
                },
                postverify: {
                    required: true
                },
            };
            var taskrules = {
                title: {
                    required: true
                },
                description: {
                    required: true
                },
                duration: {
                    required: true,
                    number: true
                }
            };
            $("#postform").validate({
                rules: taskrules,
                messages: {
                    username: "请输入用户名",
                    email: {
                        required: "请输入用户名", email: '格式不正确'
                    },
                    creator: {
                        required: "请输入你的姓名"
                    },
                    postverify: {
                        required: "请输入验证码"
                    }, phone: {
                        required: "请输入电话"
                    },
                    title: {
                        required: '请输入标题'
                    },
                    description: {
                        required: '请输入描述'
                    },
                    duration: {
                        required: '请输入有效期',
                        number: '请输入正确的格式'
                    }

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
{/block}