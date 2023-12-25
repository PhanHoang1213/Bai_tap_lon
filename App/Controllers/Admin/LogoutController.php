<?php

class LogoutController extends BaseController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['userName'])) {
            unset($_SESSION['userName']);
        }
        session_destroy();
        header("location: ?admincontroller=register");
    }
}
