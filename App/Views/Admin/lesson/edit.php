<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div id="" style="max-width: 400px;" class="ms-5 mt-5">
    <h3 class="mb-5">Chỉnh Sửa Bài Học</h3>
    <form id="edit-form" name="edit-form" method="post" action="?admincontroller=lesson&action=editLesson&lessonId=<?= $lesson['lessonId'] ?>">
        <table class="fs-4 table table-striped">
            <thead>
                <tr>
                    <th>Cột</th>
                    <th>Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="pe-4">lessonName</td>
                    <td><input type="text" class="form-control fs-4 p-2" name="lessonName" value="<?=$lesson['lessonName']?>"></td>
                </tr>
                <tr class="">
                    <td class="pe-4">lessonVideoid</td>
                    <td><input type="text" class="form-control fs-4 p-2" name="videoId" value=<?= $lesson['lessonVideoId'] ?>></td>
                </tr>
                <tr class="">
                    <td class="pe-4">courseId</td>
                    <td><select class="form-control fs-4 p-3" name="courseId">
                                <option value="<?=$lesson['id']?>"><?=$lesson['id']?></option>
                                <?php
                                foreach ($courses as $course) {
                                ?>
                                    <option value="<?= $course['id'] ?>"><?= $course['id'] ?></option>
                                <?php
                                }
                                ?>
                            </select></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" name="editUser" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Sửa
        </button>
    </form>
    <?php
    include "./App/Views/Admin/layouts/footer.php";
    ?>