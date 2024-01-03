<?php

class Learning_pathController extends BaseController
{
    private $learning_pathModel;

    public function __construct()
    {
        $this->loadModel('Learning_pathModel');
        $this->learning_pathModel = new Learning_pathModel;
    }

    public function index()
    {
        return $this->view('learning-paths.index');
    }

    public function learnBackEnd()
    {
        $courses = $this->learning_pathModel->getByRoutine(['id', 'courseName', 'courseImageURL'], ['backend', "'1'"], ['orderNumber', 'ASC']);
        return $this->view('learning-paths.learn-back-end', ['courses' => $courses]);
    }

    public function learnFrontEnd()
    {
        $courses = $this->learning_pathModel->getByRoutine(['id', 'courseName', 'courseImageURL'], ['frontend', "'1'"], ['orderNumber', 'ASC']);
        return $this->view('learning-paths.learn-front-end', ['courses' => $courses]);
    }
}
