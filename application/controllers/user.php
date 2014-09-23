<?php

class User extends Controller {

    protected $userbll;

    //protected $postmodel;

    function __construct() {
        parent::__construct();
        $this->userbll = new UserBll;
        //$this->postmodel = new Post;
    }

    function register() {
        $data = array();
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['confirmpassword'])
        ) {
            $password = $_POST['password'];
            $confirmpass = $_POST['confirmpassword'];
            $username = $_POST['username'];
            if ($password == $confirmpass) {
                $data = $_POST;
                $data['id'] = genid();
                $data['password'] = md5($data['password']);
                unset($data['confirmpassword']);
                $this->userbll->register($data);
                redirect('/page/register');
            } else {
                $data['error'] = '密码和确认密码不一致';
                $data['questions'] = $config['questions'];
                $this->view->render('register.tpl', $data);
            }
        } else {
            $data['error'] = '用户名和密码为空';
            $this->view->render('register.tpl', $data);
        }
    }

  

    function logout() {
        unset($_SESSION['user']);
        redirect('/');
    }

    //发布寻人消息
    /**
      ID
      UserName-寻人名字
      Province -Varchar(50)-省份
      City-Varchar(50)-城市
      Birthday-Datetime-出生日期
      Gender-Bit-性别
      Identity-Varchar(50)-身份证
      Description-Text-描述
      Task-Varchar(50)-任务
      TaskAwards-Float-奖励金额
      Createtime-Datetime-发布时间
      Status-Varchar(50)-发布状态
      Creator-Long-发布人ID
     * 
     */
    function postsearch() {
        $data = array();
        $rules = array(
            'username' => 'required length(50)',
            'province' => 'required length(50)',
            'city' => 'required length(50)',
            'birthday' => 'required datetime',
            'gender' => 'required length(1)',
            'identity' => 'required length(50)',
            'description' => 'required',
            'task' => 'required length(50)',
            'taskawards' => 'required numeric',
            'createtime' => 'datetime',
            'status' => 'required length(50)',
            'creator' => 'required'
        );
        $formhelper = new Form_helper;
        $result = $formhelper->validate($rules);
        //检查成功
        if ($result['status']) {
            $result = $this->postmodel->create($_POST);
            $data['message'] = '创建成功';
            $this->smarty->view('post_success.tpl', $data);
        } else {
            $data['errors'] = $result['errors'];
            $this->smarty->view('post_create.tpl', $data);
        }
    }

    function edit($id = '') {
        if ($id == '') {
            $this->show_404();
        }
        $data = array();
        global $rules;
        $form_helper = new FormHelper;
        $result = $form_helper->validate($rules['user']);
        if ($result['status']) {
            $user = UserModel::find(array('id' => $id));
            foreach ($_POST as $k => $v) {
                if ($k == 'password') {
                    $v = md5($v);
                }
                $user->$k = $v;
            }
            $user->save();
            $this->redirect($_SERVER["HTTP_REFERER"]);
        } else {
            var_dump($result['errors']);
        }
    }

}

?>
