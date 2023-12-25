<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="http://localhost:8080/Bai_tap_lon/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/base.css">
</head>

<body>
    <?php
    if (!isset($_SESSION['adminName'])) {
        header('location: ?admincontroller=register');
        exit;
    } else {
    }
    ?>
    <div class="">
        <div class="d-flex align-items-center bg-light border-bottom position-relative">
            <h2 class="mx-5">ADMIN</h2>
            <a href="?admincontroller=home" class="text border border-top-0 border-bottom-0 round-0 fs-3 p-3 px-5" style="text-decoration:none;" type="button">
                Trang Chủ
            </a>
            <div class="dropdown">
                <button class="border border-top-0 border-bottom-0 round-0 dropdown-toggle fs-3 p-3 px-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Thêm
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fs-4" href="?admincontroller=add&action=addUser">Người dùng</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Khoá học</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Bài học</a></li>
                </ul>
            </div>
            <div class="dropdown" style="height:100%">
                <button class="border border-top-0 border-bottom-0 round-0 dropdown-toggle fs-3 p-3 px-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Chỉnh sửa
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fs-4" href="#">Người dùng</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Khoá học</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Bài học</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="border border-top-0 border-bottom-0 round-0 dropdown-toggle fs-3 p-3 px-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Xoá
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fs-4" href="#">Người dùng</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Khoá học</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Bài học</a></li>
                </ul>
            </div>
            <a type='button' href='?admincontroller=logout' class='w-btn position-absolute top-50 end-0 translate-middle-y me-5'>Đăng xuất </a>
        </div>