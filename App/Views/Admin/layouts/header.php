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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            <h1 class="mx-5 my-0 text-info">ADMIN</h1>
            <a href="?admincontroller=home" class="text border border-top-0 border-bottom-0 round-0 fs-3 p-3 px-4" style="text-decoration:none;" type="button">
                Trang Chủ
            </a>
            <a href="?admincontroller=user" class="text border border-top-0 border-bottom-0 round-0 fs-3 p-3 px-4" style="text-decoration:none;" type="button">
                Người Dùng
            </a>
            <a href="?admincontroller=course" class="text border border-top-0 border-bottom-0 round-0 fs-3 p-3 px-4" style="text-decoration:none;" type="button">
                Khoá học
            </a>
            <a href="?admincontroller=lesson" class="text border border-top-0 border-bottom-0 round-0 fs-3 p-3 px-4" style="text-decoration:none;" type="button">
                Bài học
            </a>

            <a type='button' href='?admincontroller=logout' class='w-btn position-absolute top-50 end-0 translate-middle-y me-5'>Đăng xuất </a>
        </div>