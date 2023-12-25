<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div class="container pt-4">
    <h2>Tổng Quan</h2>
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card p-3 bg-info bg-opacity-75">
                <p class="fs-3 fw-bold"><?= $countUser?></p>
                <p class="fs-5 fw-semibold">Người dùng</p>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card p-3 bg-warning bg-opacity-75">
                <p class="fs-3 fw-bold"><?= $countCourse?></p>
                <p class="fs-5 fw-semibold">Khoá học</p>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card p-3 bg-danger bg-opacity-75">
                <p class="fs-3 fw-bold"><?= $countLesson?></p>
                <p class="fs-5 fw-semibold">Bài học</p>
            </div>

        </div>
    </div>
</div>
</div>

</body>

</html>