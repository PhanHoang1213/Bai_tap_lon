<?php
class HomeController extends BaseControlller
{
    public function index()
    {
        return $this->viewAdmin('Home.index');
    }
}
