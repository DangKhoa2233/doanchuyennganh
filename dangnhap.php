
<?php
session_start();
if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

if($email=="111@gmail.com" && $password=="111"){
    header('location:index1.php');
    $_SESSION['email'] = $email;
    }
    else{
        echo '111@gmail.com && pass: 111';
    }
}
?>

<link rel="stylesheet" href="css/PostCSS.css">
<script src="js/Post.js"></script>




<div class="login-page">
  <div class="form">
    <form action="dangnhap.php" method="post">
    <form class="login-form">
      <input type="text" placeholder="username" name="email"/>
      <input type="password" placeholder="password" name="password" />
      <button type="submit" name="dangnhap" > Đăng nhập </button>
      <p class="message">Not registered? <a href="dangky.php">Create an account</a></p>
    </form>
    </form>
  </div>
</div>