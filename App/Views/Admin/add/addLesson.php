<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div class="p-4">
    <div class="row">
        <div class="col-6 pe-5">
            <h2 class="mb-5">Thêm Bài Học</h2>
            <div id="login_contain">
                <form id="add-form" name="add-form" method="post" action="?admincontroller=add&action=addLesson">
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="adminName">Tên bài học</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Tên bài học" name="lessonName">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="VideoId">VideoId</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập Video id" name="VideoId">
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
                                <option value="<?= $course['id']?>"><?=$course['courseName']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <button type="submit" name="addUser" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Thêm
                    </button>
                    <?php if (isset($message))
                        echo "<h2>{$message}</h2>";
                    ?>

                </form>
            </div>
        </div>
        <div class="col-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>lessonID</th>
                        <th>lessonName</th>
                        <th>videoId</th>
                        <th>courseId</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<?php
include "./App/Views/Admin/layouts/footer.php";
?>