<head>
       <link rel="stylesheet" type="text/css" href="giao_dien/grid.css">
        <link rel="stylesheet" type="text/css" href="giao_dien/animate.css">
        <link rel="stylesheet" type="text/css" href="giao_dien/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="giao_dien/normalize.css">
        <link rel="stylesheet" type="text/css" href="giao_dien/register_form.css">
        <script src="hieu_ung/scroll_when_click_id.js"></script>
                <!-- <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script> -->
    </head>
    <section class="section-form" class="register_form" id="register">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="post" action="./chuc_nang/register/register_request.php" class="contact-form" method="POST">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" name="name" id="name" placeholder="Tên đăng nhập" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
                    </div>
                     <div class="form-group">
                        <label for="name">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" placeholder="Địa chỉ" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Số điện thoại</label>
                        <input type="text" name="telephone" id="telephone" placeholder="Số điện thoại" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="find-us">How did you find us?</label>
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-warning">Đăng kí </button>
                    </div>

                </form>

            </div>
        </section>