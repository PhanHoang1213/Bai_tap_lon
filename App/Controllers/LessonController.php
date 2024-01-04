<?php
class LessonController extends BaseController
{
    private $lessonModel;
    public function __construct()
    {
        $this->loadModel('LessonModel');
        $this->lessonModel = new LessonModel;
    }

    public function index()
    {
        $course = $_GET['course'];
        $videoId= $_GET['id'];
        $lessons = $this->lessonModel->getLessonsInCourse(['*'], ['id',"'{$course}'"]);
        return $this->view('lessons.index', ['lessons'=>$lessons, 'videoId'=>$videoId]);
    }
}