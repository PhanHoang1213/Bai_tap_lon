<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div class="p-4">
    <div class="row">
        <div class="col-3 pe-5">
            <h2 class="mb-5">Thêm Bài Học</h2>
            <div id="login_contain">
                <form id="add-form" name="add-form" method="post" action="?admincontroller=lesson&action=addLesson">
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="">Tên bài học</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Tên bài học" name="lessonName">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="VideoId">VideoId</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập Video id" name="videoId">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="courseId">Khoá học</label>
                            <select class="form-control fs-4 rounded-4 p-3" name="courseId">
                                <option value="">Chọn khoá học</option>
                                <?php
                                foreach ($courses as $course) {
                                ?>
                                    <option value="<?= $course['id'] ?>"><?= $course['courseName'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <button type="submit" name="addLesson" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Thêm
                    </button>
                    <?php if (isset($message))
                        echo "<h2 class='mt-3 text-warning'>{$message}</h2>";
                    ?>

                </form>
            </div>
        </div>
        <div class="col-9">
            <table class="table table-striped fs-5">
                <thead>
                    <tr>
                        <th></th>
                        <th>lessonID</th>
                        <th>lessonName</th>
                        <th>videoId</th>
                        <th>courseId</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lessons as $lesson) {
                        $lessonId = $lesson['lessonId'];
                        $lessonName = $lesson['lessonName'];
                        $videoId = $lesson['lessonVideoId'];
                        $courseId = $lesson['id'];
                        $edit = "?admincontroller=lesson&action=edit&lessonId={$lessonId}";
                        $delete = "?admincontroller=lesson&action=deleteLesson&lessonId={$lessonId}"
                    ?>
                        <tr>
                            <td>
                                <a href="<?= $edit ?>" class="mx-3 text-decoration-none text-dark"><i class="fa-solid fa-pen-to-square text-warning me-1"></i>Sửa</a>
                                <a href="<?= $delete ?>" class="mx-3 text-decoration-none text-dark"><i class="fa-solid fa-circle-minus text-danger me-1"></i>Xoá</a>
                            </td>
                            <td><?= $lessonId ?></td>
                            <td><?= $lessonName ?></td>
                            <td><?= $videoId ?></td>
                            <td><?= $courseId ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<?php
include "./App/Views/Admin/layouts/footer.php";
?>