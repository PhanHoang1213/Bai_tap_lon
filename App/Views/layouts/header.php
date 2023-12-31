<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <base href="http://localhost:8080/Bai_tap_lon/">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/learning_path.css">
    <link rel="stylesheet" href="public/css/course.css">
    <link rel="stylesheet" href="public/css/lesson.css">
</head>

<body>
    <div class="main">
        <!-- navbar -->
        <div class="header">
            <div class="header__navbar d-flex">
                <div class="header__navbar-logo d-flex">
                    <img src="" alt="">
                    <h4 class="header__navbar-logo_heading">Học Lập Trình</h4>
                </div>
                <ul class="header__navbar-navbtn d-flex">
                    <li class="header__navbar-navbtn-item">
                        <a href="" class="header__navbar-navbtn-item_link d-flex">
                            <svg class="header__navbar-navbtn-item_icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            <span class="header__navbar-navbtn-item_name">Home</span>
                        </a>
                    </li>
                    <li class="header__navbar-navbtn-item">
                        <a href="?controller=learning_path" class="header__navbar-navbtn-item_link d-flex">
                            <svg class="header__navbar-navbtn-item_icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <path d="M256 32H181.2c-27.1 0-51.3 17.1-60.3 42.6L3.1 407.2C1.1 413 0 419.2 0 425.4C0 455.5 24.5 480 54.6 480H256V416c0-17.7 14.3-32 32-32s32 14.3 32 32v64H521.4c30.2 0 54.6-24.5 54.6-54.6c0-6.2-1.1-12.4-3.1-18.2L455.1 74.6C446 49.1 421.9 32 394.8 32H320V96c0 17.7-14.3 32-32 32s-32-14.3-32-32V32zm64 192v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                            </svg>
                            <span class="header__navbar-navbtn-item_name">Lộ trình</span>
                        </a>
                    </li>
                    <li class="header__navbar-navbtn-item">
                        <a href="#" class="header__navbar-navbtn-item_link d-flex">
                            <svg class="header__navbar-navbtn-item_icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path d="M448 160H320V128H448v32zM48 64C21.5 64 0 85.5 0 112v64c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zM448 352v32H192V352H448zM48 288c-26.5 0-48 21.5-48 48v64c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V336c0-26.5-21.5-48-48-48H48z" />
                            </svg>
                            <span class="header__navbar-navbtn-item_name">Tiến độ</span>
                        </a>
                    </li>
                </ul>
                <div class="header__navbar-search d-flex">
                    <div class="header__navbar-search_content d-flex">
                        <input class="header__navbar-search_input" type="text" placeholder="Tìm kiếm khoá học, tài liệu,...">
                        <i class="header__navbar-search_icon fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <!-- login-->
                <?php
                if (!isset($_SESSION['userName'])) {
                    echo "<div class='header__navbar-login d-flex'>";
                    echo "<a type='button' href='?controller=register' class='header__navbar-login-btn w-btn' data-bs-toggle='' data-bs-target=''>Đăng nhập </a>";
                    echo "</div>";
                } else {
                    echo "<div class='header__navbar-login d-flex'>";
                    echo "<a type='button' href='?controller=logout' class='header__navbar-login-btn w-btn' data-bs-toggle='' data-bs-target=''>Đăng xuất </a>";
                    echo "</div>";
                }
                ?>

                <!-- <div class='header__navbar-login d-flex'>
                    <a type='button' href='?controller=register' class='header__navbar-login-btn w-btn' data-bs-toggle=' data-bs-target='>Đăng nhập </a>
                    
                </div> -->

                <!-- logged
                    <div class='header__navbar-action d-flex d-none'>
                        <div class='header__navbar-notify'>
                            <i class='header__navbar-notify-icon fa-solid fa-bell'></i>
                        </div>
                        <div class='header__navbar-account'>
                            <img class='header__navbar-account_img' src='' alt=''>
                        </div>
                    </div> -->

            </div>
        </div>