
<?php
session_start();
if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

if($email=="2@gmail.com" && $password=="111"){
    header('location:index.php');
    $_SESSION['email'] = $email;
    }
    else{
        echo    'email:2@gmail.com & password:111';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include  "layouts/headerpage.php"  ?>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
    <?php include "layouts/menupage.php" ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p></p>
            <h2>Đăng Nhập</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Chào mừng</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập Email</label>
                                    <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail" name="email">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.
</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mật khẩu</label>
                                    <input type="password"  class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <button type="submit" name="dangnhap"  class="btn oneMusic-btn mt-30">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
    <?php include "layouts/footerpage.php" ?>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


</body>

</html>