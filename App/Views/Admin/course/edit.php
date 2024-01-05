<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div id="" style="max-width: 500px;" class="ms-5 mt-5">
    <h3 class="mb-5">Chỉnh Sửa Khoá Học</h3>
    <form id="" name="" method="post" action="?admincontroller=course&action=editCourse&courseId=<?= $course['id'] ?>">
        <table class="fs-4 table table-striped">
            <thead>
                <tr>
                    <th>Cột</th>
                    <th>Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="pe-4" style="width:20%">courseId</td>
                    <td><input type="text" class="form-control fs-4 p-2" name="courseId" value="<?= $course['id'] ?>"></td>
                </tr>
                <tr class="">
                    <td class="pe-4" style="width:20%">courseName</td>
                    <td><input type="text" class="form-control fs-4 p-2" name="courseName" value="<?= $course['courseName'] ?>"></td>
                </tr>
                <tr class="">
                    <td class="pe-4" style="width:20%">courseImageURL</td>
                    <td><textarea class="form-control fs-4 p-2" name="courseImageURL" ><?= $course['courseImageURL'] ?></textarea></td>
                </tr>
                <tr class="">
                    <td class="pe-4" style="width:20%">courseIntro</td>
                    <td><textarea rows="4" class="form-control fs-4 p-2" name="courseIntro" ><?= $course['courseIntro'] ?></textarea></td>
                </tr>
                <tr class="">
                    <td class="pe-4" style="width:20%">frontend</td>
                    <td>
                        <select name="frontend" id="" class="form-select fs-4 p-2">
                            <option value="<?=$course['frontend']?>"><?=$course['frontend']?></option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </td>
                </tr>
                <tr class="">
                    <td class="pe-4" style="width:20%">backend</td>
                    <td>
                    <select name="backend" id="" class="form-select fs-4 p-2">
                            <option value="<?=$course['backend']?>"><?=$course['backend']?></option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </td>
                </tr>

            </tbody>
        </table>
        <button type="submit" name="editCourse" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Sửa
        </button>
    </form>
    <?php
    include "./App/Views/Admin/layouts/footer.php";
    ?>