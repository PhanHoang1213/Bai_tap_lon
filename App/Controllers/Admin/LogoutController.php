<?php

class LogoutController extends BaseController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['adminName'])) {
            unset($_SESSION['adminName']);
        }
        session_destroy();
        header("location: ?admincontroller=register");
    }
}
 