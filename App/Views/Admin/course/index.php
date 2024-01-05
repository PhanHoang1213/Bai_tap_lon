<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div class="p-4">
    <div class="row">
        <div class="col-3 pe-5">
            <h2 class="mb-5">Thêm Khoá Học</h2>
            <div id="login_contain">
                <form id="add-form" name="add-form" method="post" action="?admincontroller=course&action=addCourse">
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="">Id khoá học</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Id khoá học" name="courseId">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="">Tên khoá học</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Tên khoá học" name="courseName">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="">Ảnh khoá học</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Ảnh khoá học" name="courseImageURL">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="">Giới thiệu khoá học</label>
                            <textarea rows="2" class="form-control fs-4 rounded-4 p-3" placeholder="Giới thiệu khoá học" name="courseIntro"></textarea>;
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="">Lộ Trình</label>
                            <div class="d-flex align-items-center ">
                                <div>
                                    <label class="fs-5 fw-semibold" for="">Front-end</label>
                                    <input type="checkbox" class="" name="frontend" value="1">
                                </div>

                                <div class="ms-5">
                                    <label class="fs-5 fw-semibold" for="">Back-end</label>
                                    <input type="checkbox" class="" name="backend" value="1">
                                </div>
                            </div>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <button type="submit" name="addCourse" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Thêm
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
                        <th>courseId</th>
                        <th>courseName</th>
                        <th>courseImageURL</th>
                        <th>courseIntro</th>
                        <th>orderNumber</th>
                        <th>frontend</th>
                        <th>backend</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($courses as $course) {
                        $courseId = $course['id'];
                        $courseName = $course['courseName'];
                        $courseImageURL = $course['courseImageURL'];
                        $courseIntro = $course['courseIntro'];
                        $orderNumber = $course['orderNumber'];
                        $frontend = $course['frontend'];
                        $backend = $course['backend'];
                        $edit = "?admincontroller=course&action=edit&courseId={$courseId}";
                        $delete = "?admincontroller=course&action=deleteCourse&courseId={$courseId}"
                    ?>
                        <tr>
                            <td style="width: 120px;">
                                <a href="<?= $edit ?>" class="mx-2 text-decoration-none text-dark"><i class="fa-solid fa-pen-to-square text-warning me-1"></i>Sửa</a>
                                <a href="<?= $delete ?>" class="mx-2 text-decoration-none text-dark"><i class="fa-solid fa-circle-minus text-danger me-1"></i>Xoá</a>
                            </td>
                            <td><?= $courseId ?></td>
                            <td><?= $courseName ?></td>
                            <td><?= $courseImageURL ?></td>
                            <td style="width: 280px"><span class="d-block" style="max-height: 3em ;overflow:hidden;text-overflow: ellipsis;"><?= $courseIntro ?></span></td>
                            <td><?= $orderNumber ?></td>
                            <td><?= $frontend ?></td>
                            <td><?= $backend ?></td>

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