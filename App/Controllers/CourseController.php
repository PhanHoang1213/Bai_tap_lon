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
        $course = $_GET['course'];
        $courseInfo = $this->courseModel->getCourseById($course, ['id','courseName', 'courseImageURL', 'courseIntro']);
        $knowledgeCourses = $this->courseModel->getKnowledgeCourse('id',$course, ['knowledge']);
        $lessons = $this->courseModel->getLessonsInCourse(['*'], ['id',"'{$course}'"]);
        return $this->view('courses.index', ['courseInfo'=> $courseInfo, 'knowledgeCourses'=>$knowledgeCourses, 'lessons'=>$lessons]);
    }
}