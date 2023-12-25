<?php
class HomeController extends BaseController
{
    private $homeModel;
    public function __construct()
    {
        $this->loadModelAdmin('HomeModel');
        $this->homeModel = new HomeModel;
    }

    public function index()
    {
        $countUser = $this->homeModel->countUser();
        $countCourse = $this->homeModel->countCourse();
        $countLesson = $this->homeModel->countLesson();
        return $this->viewAdmin('Home.index',
        [
        'countUser'=>$countUser, 
        'countCourse'=>$countCourse, 
        'countLesson'=>$countLesson]);

    }
}
