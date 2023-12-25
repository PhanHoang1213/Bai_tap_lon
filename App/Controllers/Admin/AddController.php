<?php
class AddController extends BaseController
{
    private $addModel;
    public function __construct()
    {
        $this->loadModelAdmin('AddModel');
        $this->addModel = new AddModel;
    }

    public function addUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['addUser'])) {

                if (isset($_POST['userName']) && isset($_POST['password'])) {
                    $userName = $_POST['userName'];
                    $password = $_POST['password'];
                    $userLoginInfo = $this->addModel->getByUserName($userName);
                    if (empty($userLoginInfo)) {
                        $result=$this->addModel->insertUser("'{$userName}', '{$password}'");
                        if($result){
                            $message = "Thêm thành công";
                            $users = $this->addModel->getUsers();
                            return $this->viewAdmin('add.addUser',['message' => $message, 'users'=>$users]);
                        }
                        else{
                            $message = "Lỗi";
                            $users = $this->addModel->getUsers();
                            return $this->viewAdmin('add.addUser', ['message' => $message,'users'=>$users]);
                        }
                    } 
                    else {
                        $message = "Người dùng đã tồn tại";
                        $users = $this->addModel->getUsers();
                        return $this->viewAdmin('add.addUser', ['message' => $message,'users'=>$users]);
                    }
                }
            }
        }
        else{
            $users = $this->addModel->getUsers();
            return $this->viewAdmin('add.addUser', ['users'=>$users]);
        }
    }
}