<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/header.php';
?>
<div class="row" style="padding-top:80px;">
    <div class="col-md-9" style=" overflow-y: auto;">
        <div class="px-5 mt-2 bg-dark d-flex align-items-center justify-content-center" style="height: 550px">
            <?php

            $lessonVideoId = $lessons[0]['lessonVideoId'];
            ?>
            <iframe class="" width="91%" height="550" src="https://www.youtube.com/embed/<?= $lessonVideoId ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-md-3 " style="overflow-y: auto;">
        <h3 class="fw-semibold">Nội dung khoá học</h3>
        <ul class="list-group" style="list-style: none; height:100%;">
            <?php
            $count = 1;
            foreach ($lessons as $lesson) {
                $courseId = $lesson['id'];
                $lessonName = $lesson['lessonName'];
                $lessonVideoId = $lesson['lessonVideoId'];

            ?>
                <a href="?controller=lesson&course=<?= $courseId ?>&id=<?= $lessonVideoId ?>" style="text-decoration: none">
                    <li class="text border-bottom bg-light p-3 fw-semibold"><?= $count . '. ' . $lessonName ?></li>
                </a>
            <?php
                $count++;
            }
            ?>
        </ul>
    </div>
</div>
<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/footer.php';
?>