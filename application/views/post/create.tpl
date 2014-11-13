{extends file='layouts/main.tpl'}
{block name=content}
    <div>
        <form action="{site_url('/post/save')}" 
              method="post" 
              style="width: 960px;" class="form center" id="postform">
            {include file='model/post.tpl' isnew=false model=null isedit=false}
            <div>
                <input type='submit' value="提交" class="btn">
                <a href="javascript:;" class='btn'>重置</a>
            </div>
        </form>
        <script>
            var validation = $("#postform").validate({
                //debug: true,
                rules: userrules,
                messages: usermessages,
                submitHandler: function (form) {
                    // some other code
                    // maybe disabling submit button
                    // then:
                    $(form).submit();
                }
            });


            // validatingUserForm();
            $('select[name=posttype]').change(function (e) {
                var v = $(e.target).val();
                if (v == 's') {
                    $('#s').show();
                    validatingUserForm();
                } else {
                    $('#s').hide();
                    validationTaskForm();
                }
            });
            var userrules = {
                name: {
                    required: true
                },
                age: {
                    required: true,
                    number: true
                },
                email: {
                    required: true,
                    //email: true
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
            var usermessages = {
                name: "请输入用户名",
                email: {
                    required: "请输入QQ/邮箱",
                    //email: '格式不正确'
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
                },
                age: {
                    required: '请输入年龄',
                    number: '请输入正确的格式'
                }
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
                },
                postverify: {
                    required: true
                },
                email: {
                    required: true,
                    //email: true
                },
                creator: {
                    required: true
                },
                phone: {
                    required: true
                },
            };
            var taskmessages = {
                title: {
                    required: '请输入标题'
                },
                description: {
                    required: '请输入描述'
                },
                duration: {
                    required: '请输入有效期',
                    number: '请输入正确的格式'
                },
                postverify: {
                    required: "请输入验证码"
                },
                creator: {
                    required: "请输入你的姓名"
                },
               phone: {
                    required: "请输入电话"
                },
            };
            function validatingUserForm() {
                validation.resetForm();
                validation.settings.rules = userrules;
                validation.settings.messages = usermessages;
            }
            function validationTaskForm() {
                validation.resetForm();
                validation.settings.rules = taskrules;
                validation.settings.messages = taskmessages;
            }
            validatingUserForm();
        </script>
    </div>
{/block}