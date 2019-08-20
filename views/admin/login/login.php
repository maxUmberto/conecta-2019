<?php
include 'views/template/head.php';
?>

<style>
    .container{
        margin-top: 120px;
        color: #FFFFFF;
    }
    .user_card {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: #171B20;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;
    }
    .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #ffffff;
        padding: 10px;
        text-align: center;
    }
    .brand_logo {
        margin-top: 15px;
    }
    .form_container {
        margin-top: 100px;
    }
    .login_btn {
        width: 100%;
    }
    .login_container {
        padding: 0 2rem;
    }
    .input-group-text {
        background-image: -moz-linear-gradient(120deg, #ff6b21 0%, #f8d510 100%);
        background-image: -webkit-linear-gradient(120deg, #ff6b21 0%, #f8d510 100%);
        background-image: -ms-linear-gradient(120deg, #ff6b21 0%, #f8d510 100%);
        color: #171B20 !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }
    .text-muted {
        color: #f8d7da !important;
    }
</style>

<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="assets/img/core-img/logo-preto.png" class="brand_logo img-fluid" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="post" action="<?php echo BASE_URL; ?>/login/logar">
                    <?php
                    if(isset($_SESSION['login']['password'])){
                        echo '<small class="form-text text-muted">';
                        echo $_SESSION['login']['password'];
                        echo '</small>';
                        unset($_SESSION['login']['password']);
                    }
                    ?>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="zmdi zmdi-account"></i></span>
                        </div>
                        <input type="text" name="user" class="form-control input_user" value="" placeholder="usuario">
                    </div>

                    <?php
                    if(isset($_SESSION['login']['name'])){
                        echo '<small class="form-text text-muted">';
                        echo $_SESSION['login']['name'];
                        echo '</small>';
                        unset($_SESSION['login']['name']);
                    }
                    ?>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" value="" placeholder="senha">
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn confer-btn">Login <i class="zmdi zmdi-long-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="<?php echo BASE_URL ?>/assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="<?php echo BASE_URL ?>/assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo BASE_URL ?>/assets/js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="<?php echo BASE_URL ?>/assets/js/confer.bundle.js"></script>
<!-- Active -->
<script src="<?php echo BASE_URL ?>/assets/js/default-assets/active.js"></script>
</body>
