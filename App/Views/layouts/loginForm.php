<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> -->
            <div class="modal-body fs-3">
                <button type="button" class="btn-close float-end fs-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="m-4">

                    <div class="mb-4">
                        <button id="register" class="btn text-dark btn-info btn-border fs-3 fw-semibold" onclick="onRegister()">Đăng ký</button>
                        <button id="login" class="btn text-dark btn-border fs-3 fw-semibold" onclick="onLogin()">Đăng
                            nhập</button>
                    </div>
                    <div id="register_contain">
                        <form id="register-form" name="register-form">
                            <div class="row">
                                <div class="form-group col">
                                    <label class="fs-4 fw-semibold" for="userName">Tên đăng nhập</label>
                                    <input type="text" id="username" rules="required" class="form-control fs-4 rounded-4 p-3" placeholder="Tên đăng nhập" name="username">
                                    <span class="form-message"></span>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="form-group col">
                                    <label class="fs-4 fw-semibold" for="password">Mật khẩu</label>
                                    <input type="password" id="password" rules="required|min:6" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập mật khẩu" name="password">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group col">
                                    <label class="fs-4 fw-semibold" for="confirm-password">Nhập lại mật
                                        khẩu</label>
                                    <input type="password" id="confirm-password" rules="required|min:6" class="form-control fs-4 rounded-4 p-3" placeholder="Nhập lại mật khẩu" name="confirm-password">
                                    <span class="form-message"></span>
                                </div>
                            </div>

                            <button type="submit" id="submit-register" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2" style="float: right;" value="register">Đăng ký
                            </button>
                        </form>
                    </div>
                    <div id="login_contain" style="display: none;">
                        <form name="login-form">
                            <div class="row mt-4">
                                <div class="form-group col">
                                    <label class="fs-4 fw-semibold" for="userName">Tên đăng nhập</label>
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
                            <button type="submit" id="submit-login" class="w-btn mt-5 mb-4 fs-3 fw-semibold px-4 py-2 round-pill" style="float: right;" value="login">Đăng nhập
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>