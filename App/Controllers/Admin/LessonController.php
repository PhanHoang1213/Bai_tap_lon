<?php
class LessonController extends BaseController
{
    private $lessonModel;
    public function __construct()
    {
        $this->loadModelAdmin('LessonModel');
        $this->lessonModel = new LessonModel;
    }
    public function index()
    {
        $courses = $this->lessonModel->getCourses();
        $lessons = $this->lessonModel->getLessons();
        $this->viewAdmin('lesson.index', ['lessons' => $lessons, 'courses' => $courses]);
    }

    public function edit()
    {   $courses = $this->lessonModel->getCourses();
        $lessonId = $_GET['lessonId'];
        $lesson = $this->lessonModel->getLessonById($lessonId);
        $this->viewAdmin('lesson.edit', ['lesson'=>$lesson, 'courses'=>$courses]);
    }

    public function addLesson()
    {
        $courses = $this->lessonModel->getCourses();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['addLesson'])) {

                if (isset($_POST['lessonName'])) {
                    $lessonName = $_POST['lessonName'];
                    $videoId = $_POST['videoId'];
                    $courseId = $_POST['courseId'];

                    $lessonInfo = $this->lessonModel->getLessonVideoId($videoId);
                    if (empty($lessonInfo)) {
                        $result = $this->lessonModel->insertLesson("lessonName, lessonVideoId, id", "'{$lessonName}', '{$videoId}', '{$courseId}'");
                        if ($result) {
                            $message = "Thêm thành công";
                            $lessons = $this->lessonModel->getLessons();
                            return $this->viewAdmin('lesson.index', ['message' => $message, 'lessons' => $lessons,'courses' => $courses]);
                        } else {
                            $message = "Lỗi";
                            $lessons = $this->lessonModel->getLessons();
                            return $this->viewAdmin('lesson.index', ['message' => $message, 'lessons' => $lessons,'courses' => $courses]);
                        }
                    } else {
                        $message = "Bài học đã tồn tại";
                        $lessons = $this->lessonModel->getlessons();
                        $courses = $this->lessonModel->getCourses();
                        return $this->viewAdmin('lesson.index', ['message' => $message, 'lessons' => $lessons,'courses' => $courses]);
                    }
                }
            }
        } else {
            $lessons = $this->lessonModel->getlessons();
            return $this->viewAdmin('lesson.index', ['lessons' => $lessons]);
        }
    }

    public function editLesson()
    {
        $lessonId = $_GET['lessonId'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['lessonName'])) {
                $lessonName = $_POST['lessonName'];
                $lessonVideoId = $_POST['videoId'];
                $courseId = $_POST['courseId'];
                $this->lessonModel->updateLesson($lessonId, ["{$lessonName}", "{$lessonVideoId}", "{$courseId}"]);
                $lessons = $this->lessonModel->getlessons();
                return $this->viewAdmin('lesson.index',  ['lessons'=>$lessons ]);
            }
        }
    }

    public function deleteLesson()
    {
        $lessonId = $_GET['lessonId'];
        $this->lessonModel->delete($lessonId);
        $lessons = $this->lessonModel->getLessons();
        $courses = $this->lessonModel->getCourses();
        return $this->viewAdmin('lesson.index', ['lessons' => $lessons,'courses' => $courses]);
    }
}
