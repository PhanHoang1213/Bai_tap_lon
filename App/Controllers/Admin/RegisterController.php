<?php

class RegisterController extends BaseController
{
    private $registerModel;

    public function __construct()
    {
        $this->loadModelAdmin('RegisterModel');
        $this->registerModel = new RegisterModel;
    }

    public function index()
    {

        $this->viewAdmin('register.index');
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit-login'])) {

                if (isset($_POST['adminName']) && isset($_POST['password'])) {
                    $adminName = $_POST['adminName'];
                    $password = $_POST['password'];
                    $AdminLoginInfo = $this->registerModel->getByAdminName($adminName);
                    if (empty($AdminLoginInfo)) {
                        $message = "Tên đăng nhập không chính xác!";
                        return $this->viewAdmin('register.index', ['message' => $message]);
                    } else {
                        if ($AdminLoginInfo['password'] != $password) {
                            $message = "Mật khẩu không chính xác!";
                            return $this->viewAdmin('register.index', ['message' => $message]);
                        } else {
                            session_start();
                            $_SESSION['adminName'] = $adminName;
                            $_SESSION['password'] = $password;
                            header('location: ?admincontroller=home');
                            exit;
                        }
                    }
                }
            }
        }
    }
}
