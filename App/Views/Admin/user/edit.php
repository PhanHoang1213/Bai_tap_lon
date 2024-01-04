<?php
include "./App/Views/Admin/layouts/header.php";
?>

<div id="" style="max-width: 400px;" class="ms-5 mt-5">
    <h3 class="mb-5">Chỉnh Sửa Người Dùng</h3>
    <form id="edit-form" name="edit-form" method="post" action="?admincontroller=user&action=editUser&userName=<?= $user['userName'] ?>">
        <table class="fs-4 table table-striped">
            <thead>
                <tr>
                    <th>Cột</th>
                    <th>Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="pe-4">UserName</td>
                    <td><input type="text" class="form-control fs-4 p-2" name="userName" value=<?= $user['userName'] ?>></td>
                </tr>
                <tr class="">
                    <td class="pe-4">Password</td>
                    <td><input type="text" class="form-control fs-4 p-2" name="password" value=<?= $user['password'] ?>></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" name="editUser" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;">Sửa
        </button>
    </form>
    <?php
    include "./App/Views/Admin/layouts/footer.php";
    ?>