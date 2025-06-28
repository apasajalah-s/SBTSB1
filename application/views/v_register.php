<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - SI Booking Tiket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>favicon.jpeg">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="login-area">
        <div class="container">
            <div class="login-box">
                <form action="<?= base_url('auth/register_action') ?>" method="post">
                    <div class="login-form-head">
                        <h4>REGISTER</h4>
                        <h1>Sistem Booking Tiket</h1>
                        <p>Stadion Bola</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama" required>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username" required>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" required>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label>No HP</label>
                            <input type="text" name="no_hp" placeholder="No HP" required>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Daftar<i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <!-- jquery latest version -->
    <script src="<?php echo base_url(); ?>assets/login/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>assets/login/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="<?php echo base_url(); ?>assets/login/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/scripts.js"></script>
</body>

</html>