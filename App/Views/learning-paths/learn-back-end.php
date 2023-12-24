<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/header.php';
?>
<div class="content">
    <div class="route container">
        <span class="route__heading heading-1">Lộ trình Back-end</span>
        <div class="route__list row">
            <?php
            $count = 1;
            foreach ($courses as $course) {
                $courseName = $course['courseName'];
                $courseImageURL = $course['courseImageURL'];
                $courseId = $course['id'];
                $courseURL = "?controller=course&id={$courseId}";
            ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 px-4 mb-5">
                    <span class="route__item-heading heading-2 mb-1"><?= $count . '. ' . $courseName ?></span>
                    <div class="route__item-course frame d-flex">
                        <div class="route__item-course-show">
                            <a href="<?= $courseURL ?>" class="route__item-course-link">
                                <img class="route__item-course-img" src="<?= $courseImageURL ?>" alt="">
                            </a>
                        </div>
                        <div class="route__course">
                            <span class="route__course-name heading-3"><?= $courseName ?></span>
                            <p class="route__course-desc">Mô tả</p>
                            <a href="<?= $courseURL ?>" class="route__course-btn w-btn">Xem khoá học</a>
                        </div>
                    </div>
                </div>
            <?php
                $count++;
            }
            ?>
        </div>
    </div>
</div>
<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/footer.php';
?>