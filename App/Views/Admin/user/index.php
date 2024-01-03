<?php
include "./App/Views/Admin/layouts/header.php";
?>
<div class="p-4">
    <div class="row">
        <div class="col-3 pe-5">
            <h3 class="mb-5">Thêm Người Dùng</h3>
            <div id="login_contain">
                <form id="add-form" name="add-form" method="post" action="?admincontroller=user&action=addUser">
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="adminName">Tên đăng nhập</label>
                            <input type="text" class="form-control fs-4 rounded-4 p-3" placeholder="Tên đăng nhập" name="userName">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="password">Password</label>
                            <input type="password" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập mật khẩu" name="password">
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
        <div class="col-9 fs-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>userName</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $user) {
                        $userName = $user['userName'];
                        $password = $user['password'];
                        $edit = "?admincontroller=user&action=edit&userName={$userName}";
                        $delete = "?admincontroller=user&action=deleteUser&userName={$userName}";
                    ?>
                        <tr>
                            <td style="width:20%">
                                <a href="<?=$edit?>" class="mx-3 text-decoration-none text-dark"><i class="fa-solid fa-pen-to-square text-warning me-1"></i>Sửa</a> 
                                <a href="<?=$delete?>" class="mx-3 text-decoration-none text-dark"><i class="fa-solid fa-circle-minus text-danger me-1"></i>Xoá</a>
                            </td>
                            <td><?= $userName ?></td>
                            <td><?= $password ?></td>
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