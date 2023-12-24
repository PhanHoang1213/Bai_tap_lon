<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/header.php';
?>
<div class="content">
    <div class="route container">
        <h1 class="route__heading heading-1">Lộ Trình</h1>
        <p class="text">Để bắt đầu một cách thuận lợi, bạn nên tập trung vào một lộ trình học. Ví dụ: Để đi làm với vị trí "Lập trình viên Front-end" bạn nên tập trung vào lộ trình "Front-end".</p>
        <div class="route__content row">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="route__content-item frame">
                    <div class="route__content-item-body">
                        <a href="/learning-paths/learn-frond-end.html" class="route__content-item-heading heading-3">Lộ Trình Học Front-end</a>
                        <p class="route__content-item-desc">Lập trình Front-end là việc sử dụng các ngôn ngữ
                            HTML,
                            CSS
                            hay ngôn ngữ lập trình Javascript để các lập trình viên thiết kế ra các giao diện
                            ứng
                            dụng
                            hoặc trang web cho người dùng.</p>
                    </div>
                    <div class="route__content-item-btn">
                        <a href="?controller=learning_path&action=learnFrontEnd" class="route__content-item-show w-btn">Xem
                            lộ trình</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="route__content-item frame">
                    <div class="route__content-item-body">
                        <a href="/learning-paths/learn-back-end.html" class="route__content-item-heading heading-2">Lộ Trình Học Back-end</a>
                        <p class="route__content-item-desc">Lập trình Back-end là lập trình phía server để xử
                            lý, lưu trữ và phục vụ dữ liệu cho phía Front-end.</p>
                    </div>
                    <div class="route__content-item-btn">
                        <a href="?controller=learning_path&action=learnBackEnd" class="route__content-item-show w-btn">Xem
                            lộ
                            trình</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include '/xampp/htdocs/Bai_tap_lon/App/Views/layouts/footer.php';
?>