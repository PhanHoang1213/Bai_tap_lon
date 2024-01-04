<?php

class UserController extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->loadModelAdmin('UserModel');
        $this->userModel = new UserModel;
    }
    public function index()
    {
        $users = $this->userModel->getUsers();
        $this->viewAdmin('user.index', ['users' => $users]);
    }

    public function edit()
    {
        $userName = $_GET['userName'];
        $user = $this->userModel->getByUserName($userName);
        $this->viewAdmin('user.edit', ['user' => $user]);
    }

    public function addUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['addUser'])) {

                if (isset($_POST['userName']) && isset($_POST['password'])) {
                    $userName = $_POST['userName'];
                    $password = $_POST['password'];
                    $userLoginInfo = $this->userModel->getByUserName($userName);
                    if (empty($userLoginInfo)) {
                        $result = $this->userModel->insertUser("'{$userName}', '{$password}'");
                        if ($result) {
                            $message = "Thêm thành công";
                            $users = $this->userModel->getUsers();
                            return $this->viewAdmin('user.index', ['message' => $message, 'users' => $users]);
                        } else {
                            $message = "Lỗi";
                            $users = $this->userModel->getUsers();
                            return $this->viewAdmin('user.index', ['message' => $message, 'users' => $users]);
                        }
                    } else {
                        $message = "Người dùng đã tồn tại";
                        $users = $this->userModel->getUsers();
                        return $this->viewAdmin('user.index', ['message' => $message, 'users' => $users]);
                    }
                }
            }
        } else {
            $users = $this->userModel->getUsers();
            return $this->viewAdmin('user.index', ['users' => $users]);
        }
    }

    public function editUser()
    {
        $userName = $_GET['userName'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['userName']) && isset($_POST['password'])) {
                $userNameUp = $_POST['userName'];
                $password = $_POST['password'];
                $this->userModel->update($userName, [$userNameUp, $password]);
                $users = $this->userModel->getUsers();
                return $this->goPage('?admincontroller=user', ['users' => $users]);
                // return $this->viewAdmin('user.index', ['users' => $users]);
            }
        } else {
            $users = $this->userModel->getUsers();
            return $this->viewAdmin('user.edit', ['users' => $users]);
        }
    }

    public function deleteUser()
    {
        $userName = $_GET['userName'];
        $this->userModel->delete($userName);
        $users = $this->userModel->getUsers();
        return $this->viewAdmin('user.index', ['users' => $users]);
    }
}
