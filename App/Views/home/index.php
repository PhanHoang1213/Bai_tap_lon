<?php

include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/header.php';
?>
<div class="content">
    <div class="content__course container">
        <span class="content__course-heading heading-1">Khoá học</span>
        <div class="content__course-section row">
            <?php
            foreach ($coursesInfo as $courseInfo) {
                $courseName = $courseInfo['courseName'];
                $courseImageURL = $courseInfo['courseImageURL'];
                $courseId = $courseInfo['id'];
                $courseURL = "?controller=course&id={$courseId}";
            ?>
                <div class="col col-xl-3 col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-12 px-3">
                    <div class="content__course-item">
                        <a href="<?= $courseURL ?>" class="content__course-item_link show-course-bgr">
                            <button href="<?= $courseURL ?>" class="content__course-show show-course">Xem khoá
                                học</button>
                            <img src="<?= $courseImageURL ?>" alt="" class="content__course-item_img">
                        </a>
                        <a href="<?= $courseURL ?>" class="content__course-item_name"><?= $courseName ?></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/footer.php';
?>