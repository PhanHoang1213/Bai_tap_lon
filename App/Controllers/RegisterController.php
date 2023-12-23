<?php

class RegisterController extends BaseControlller
{
    private $registerModel;

    public function __construct()
    {
        $this->loadModel('RegisterModel');
        $this->registerModel = new RegisterModel;
    }

    public function index()
    {
        $this->view('register.index');
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit-login'])) {

                if (isset($_POST['userName']) && isset($_POST['password'])) {
                    $userName = $_POST['userName'];
                    $password = $_POST['password'];
                    $userLoginInfo = $this->registerModel->getByUserName($userName);
                    if (empty($userLoginInfo)) {
                        $message = "Tên đăng nhập không chính xác!";
                        return $this->view('register.index', ['message' => $message]);
                    } else {
                        if ($userLoginInfo['password'] != $password) {
                            $message = "Mật khẩu không chính xác!";
                            return $this->view('register.index', ['message' => $message]);
                        } else {
                            session_start();
                            $_SESSION['userName'] = $userName;
                            return $this->view('home.index');
                        }
                    }
                }
            }
            if (isset($_POST['submit-register'])) {
                if (isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
                    if (empty($_POST['userName']) || empty($_POST['password']) || empty($_POST['confirm-password'])) {
                        $message = "Nhập đầy đủ thông tin!";
                        return $this->view('register.index', ['message' => $message]);
                    }
                    $userName = $_POST['userName'];
                    $password = $_POST['password'];
                    $userList = $this->registerModel->getUsers(['userName']);
                    foreach ($userList as $user) {
                        if ($user['userName'] == $userName) {
                            $message = "Tên đăng nhập đã tồn tại!";
                            return $this->view('register.index', ['message' => $message]);
                        }
                    }
                    $this->registerModel->register($userName, $password);
                    $message = "Đăng ký thành công";
                    return $this->view('register.index', ['message' => $message]);
                }
            }
        }
    }
}
