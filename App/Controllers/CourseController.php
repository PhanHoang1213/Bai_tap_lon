<?php
class CourseController extends BaseControlller
{
    private $courseModel;
    public function __construct()
    {
        $this->loadModel('CourseModel');
        $this->courseModel = new CourseModel;
    }

    public function index()
    {
        $id = $_GET['id'];
        $courseInfo = $this->courseModel->getCourseById($id, ['courseName', 'courseImageURL', 'courseIntro']);
        $knowledgeCourses = $this->courseModel->getKnowledgeCourse('id',$id, ['knowledge']);
        return $this->view('courses.index', ['courseInfo'=> $courseInfo, 'knowledgeCourses'=>$knowledgeCourses]);
    }
}