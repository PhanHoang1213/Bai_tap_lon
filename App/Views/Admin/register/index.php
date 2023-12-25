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
    <script src="public/js/convertForm.js"></script>
    <script src="public/js/ValidationForm.js"></script>
</head>

<body>
    <div class="card mt-5" style="max-width: 600px; margin:auto">
        <div class="m-4">
            <div class="mb-4">
                <h2 id="login" class="text-dark fs-3 fw-semibold text-center">Đăng
                    Nhập Trang Quản Trị</h2>
            </div>
            <div id="login_contain">
                <form id="login-form" name="login-form" method="post" action="?admincontroller=register&action=register">
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="adminName">Tên đăng nhập</label>
                            <input type="text" id="login-adminName" class="form-control fs-4 rounded-4 p-3" placeholder="Tên đăng nhập" name="adminName">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="password">Password</label>
                            <input type="password" id="login-password" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập mật khẩu" name="password">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <button type="submit" name="submit-login" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;" value="login">Đăng nhập
                    </button>
                </form>
            </div>
            <?php if (isset($message)) : ?>
                <h3 class="mt-2 text-danger">
                    <?php echo $message; ?>
                </h3>
            <?php endif; ?>
        </div>
    </div>
    <script>
        Validator({
            form: "#login-form",
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#login-adminName', "Vui lòng nhập tên đăng nhập!"),
                Validator.isRequired('#login-password', "Vui lòng nhập mật khẩu!"),
                Validator.minLength('#login-password', 5),
            ]

        });
    </script>
</body>

</html>