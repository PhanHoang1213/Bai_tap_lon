<?php

class HomeController extends BaseControlller
{
    private $homeModel;
    public function __construct()
    {
        $this->loadModel('HomeModel');
        $this->homeModel = new HomeModel;
    }

    public function index()
    {
        $coursesInfo = $this->homeModel->getCoursesOrder(['id','courseName', 'courseImageURL'], ['orderNumber', 'ASC']);
        $this->view('home.index', ['coursesInfo' => $coursesInfo]);
    }
}
