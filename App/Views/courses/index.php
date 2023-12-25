<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/header.php';
?>
<?php
$courseId = $courseInfo['id'];
$courseName = $courseInfo['courseName'];
$courseImageURL = $courseInfo['courseImageURL'];
$courseIntro = $courseInfo['courseIntro'];
?>
<div class="content container">
    <div class="contain">
        <div class="contain-course row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="course__about">
                    <h1 class="heading"><?= $courseName ?></h1>
                    <p class="text"><?= $courseIntro ?></p>
                    <div class="course__about-knowledge">
                        <h2 class="sub-heading">Bạn sẽ học được gì?</h2>
                        <ul class="course__about-knowledge-list">
                            <?php
                            foreach ($knowledgeCourses as $knowledgeCourse) {
                                $knowledge = $knowledgeCourse['knowledge'];

                            ?>
                                <li class="course__about-knowledge-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                    </svg>
                                    <span class="course__about-knowledge-desc text"><?= $knowledge ?></span>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <!-- <div class="course__content">
                        <h2 class="sub-heading">Nội dung khoá học</h2>
                    </div> -->
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-0 col-0">
                <div class="course__start">
                    <div class="course__start-avatar" style="background-image: url(<?= $courseImageURL ?>) ;">
                    </div>
                    <?php
                    if (isset($_SESSION['userName'])) {
                        if (!empty($lessons)) {
                            $lessonVideoId = $lessons[0]['lessonVideoId'];
                            $url = "?controller=lesson&course={$courseId}&id={$lessonVideoId}";
                        } else {
                            $url = "?controller=course&course={$courseId}";
                        }
                    } else {
                        $url = "?controller=register";
                    }
                    ?>
                    <a href="<?= $url ?>" class="w-btn fs-3">Bắt đầu học</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/footer.php';
?>