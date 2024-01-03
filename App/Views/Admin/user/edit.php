<?php
include "./App/Views/Admin/layouts/header.php";
?>

<div id="" style="max-width: 500px;" class="ms-5 mt-5">
    <h3 class="mb-5">Chỉnh Sửa Người Dùng</h3>
    <form id="edit-form" name="edit-form" method="post" action="?admincontroller=user&action=editUser">
        <div class="row mt-4">
            <div class="form-group col">
                <label class="fs-4 fw-semibold" for="">Tên đăng nhập</label>
                <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Tên đăng nhập" name="userName" value=<?= $user['userName'] ?>>
                <span class="form-message"></span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="form-group col">
                <label class="fs-4 fw-semibold" for="password">Password</label>
                <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập mật khẩu" name="password" value=<?= $user['password'] ?>>
                <span class="form-message"></span>
            </div>
        </div>
        <button type="submit" name="editUser" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Sửa
        </button>
        <?php
        include "./App/Views/Admin/layouts/footer.php";
        ?>