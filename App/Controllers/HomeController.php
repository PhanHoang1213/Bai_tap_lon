<?php

class HomeController extends BaseControlller
{
    public function index()
    {
        $this->view('home.index');
    }
}