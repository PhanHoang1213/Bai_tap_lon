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
                <button id="login" class="btn text-dark  btn-info btn-border fs-3 fw-semibold" onclick="onLogin()">Đăng
                    nhập</button>
                <button id="register" class="btn text-dark btn-border fs-3 fw-semibold" onclick="onRegister()">Đăng ký</button>
            </div>
            <div id="login_contain">
                <form id="login-form" name="login-form" method="post" action="?controller=register&action=register">
                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="userName">Tên đăng nhập</label>
                            <input type="text" id="login-userName" class="form-control fs-4 rounded-4 p-3" placeholder="Tên đăng nhập" name="userName">
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
            <div id="register_contain" style="display: none;">
                <form id="register-form" name="register-form" method="post" action="?controller=register&action=register">
                    <div class="row">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="userName">Tên đăng nhập</label>
                            <input type="text" id="register-userName" rules="required" class="form-control fs-4 rounded-4 p-3" placeholder="Tên đăng nhập" name="userName">
                            <span class="form-message"></span>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="password">Mật khẩu</label>
                            <input type="password" id="register-password" rules="required|min:6" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập mật khẩu" name="password">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group col">
                            <label class="fs-4 fw-semibold" for="confirm-password">Nhập lại mật
                                khẩu</label>
                            <input type="password" id="register-confirm-password" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập lại mật khẩu" name="confirm-password">
                            <span class="form-message"></span>
                        </div>
                    </div>

                    <button type="submit" name="submit-register" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2" style="float: right;" value="register">Đăng ký
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
                Validator.isRequired('#login-userName', "Vui lòng nhập tên đăng nhập!"),
                Validator.isRequired('#login-password', "Vui lòng nhập mật khẩu!"),
                Validator.minLength('#login-password', 5),
            ]

        });
        Validator({
            form: "#register-form",
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#register-userName', "Vui lòng nhập tên đăng nhập!"),
                Validator.isRequired('#register-password', "Vui lòng nhập mật khẩu!"),
                Validator.minLength('#register-password', 5),
                Validator.isConfirmed('#register-confirm-password', function() {
                    return document.querySelector('#register-form #register-password').value;
                }, 'Mật khẩu không khớp!')
            ]

        });
    </script>
</body>

</html>