<?php
class CourseController extends BaseController
{
    private $courseModel;
    public function __construct()
    {
        $this->loadModelAdmin('CourseModel');
        $this->courseModel = new CourseModel;
    }

    public function index()
    {
        $courses = $this->courseModel->getCoursesOrder();
        return $this->viewAdmin('course.index', ['courses' => $courses]);
    }

    public function edit()
    {
        $courseId = $_GET['courseId'];
        $course = $this->courseModel->findCourseId($courseId);
        $this->viewAdmin('course.edit', ['course' => $course]);
    }

    public function addCourse()
    {
        $courses = $this->courseModel->getCoursesOrder();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['addCourse'])) {

                if (isset($_POST['courseId'])) {
                    $courseId = $_POST['courseId'];
                    $courseName = $_POST['courseName'];
                    $courseImageURL = $_POST['courseImageURL'];
                    $courseIntro = $_POST['courseIntro'];
                    if (isset($_POST["frontend"])) {
                        $frontend = $_POST['frontend'];
                    } else {
                        $frontend = 0;
                    }
                    if (isset($_POST["backend"])) {
                        $backend = $_POST['backend'];
                    } else {
                        $backend = 0;
                    }


                    $CourseInfoId = $this->courseModel->findCourseId($courseId);
                    $CourseInfoName = $this->courseModel->findCourseName($courseName);
                    if (empty($CourseInfoId) && empty($CourseInfoName)) {
                        $result = $this->courseModel->insertCourse("id, courseName, courseImageURl, courseIntro, frontend, backend", "'{$courseId}', '{$courseName}', '{$courseImageURL}', '{$courseIntro}', '{$frontend}', '{$backend}'");
                        if ($result) {
                            $message = "Thêm thành công";
                            $courses = $this->courseModel->getCoursesOrder();
                            return $this->viewAdmin('course.index', ['message' => $message, 'courses' => $courses]);
                        } else {
                            $message = "Lỗi";
                            $courses = $this->courseModel->getCoursesOrder();
                            return $this->viewAdmin('course.index', ['message' => $message, 'courses' => $courses]);
                        }
                    } else {
                        $message = "Khoá học đã tồn tại";
                        return $this->viewAdmin('course.index', ['message' => $message, 'courses' => $courses]);
                    }
                }
            }
        }
    }

    public function editCourse()
    {
        $courseId = $_GET['courseId'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['courseId'])) {
                $courseIdUp = $_POST['courseId'];
                $courseName = $_POST['courseName'];
                $courseImageURL = $_POST['courseImageURL'];
                $courseIntro = $_POST['courseIntro'];
                $frontend = $_POST['frontend'];
                $backend = $_POST['backend'];
                $this->courseModel->updateCourse($courseId, ["{$courseIdUp}", "{$courseName}", "{$courseImageURL}", "{$courseIntro}", "{$frontend}", "{$backend}"]);
                $courses = $this->courseModel->getCoursesOrder();
                return $this->viewAdmin('course.index',  ['courses' => $courses]);
            }
        }
    }

    public function deleteCourse()
    {
        $courseId = $_GET['courseId'];
        $this->courseModel->delete($courseId);
        $courses = $this->courseModel->getCoursesOrder();
        return $this->viewAdmin('course.index', ['courses' => $courses]);
    }
}
