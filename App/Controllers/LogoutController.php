<?php

class LogoutController extends BaseControlller
{
    public function index()
    {
        if (isset($_SESSION['userName'])) {
            unset($_SESSION['userName']);
        }
        session_destroy();
        header("location: ?controller=home");
    }
}