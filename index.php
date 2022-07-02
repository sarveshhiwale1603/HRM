
<?php
session_start();
include("pages/include/config.php");
if(isset($_POST['login'])){
$email=$_POST['email'];
$password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from login where email='$email'");
$row=mysqli_fetch_array($sql);

if($row>0){
    $email=$row['email'];
    $password=$row['password'];
    $hashpassword=password_verify($password1,$password);
    if($hashpassword){
      $_SESSION['id']=$row['id'];
      $_SESSION['name']=$row['name'];
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("location:/pages/forms/dashboard-admin.php");
    }else{
        echo "<script>alert('Password is incorrect');</script>";
    }
}
else{
    echo "<script>alert('Invalid Email Id');</script>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<style>
  .login-card{
    height:100vh;
    width:100%;
      }
      body{
        height:100vh;
      }
      .row{
        height:100vh;
      }
      .card1{
        position: relative;
        align-items:center;
        display: -webkit-flex;
    display: flex;

      }
      .card-body{
        margin:0 auto;
        padding:4.16rem;
      }
      .card{
        border:none;
        border-radius:0.1px;
      }
      .brand-wrapper{
        text-align:center;
      }
      .logo{
        width:20%
      }
      .form-control{
        border: none;
        border-bottom: 1px solid #d7d7d7;
        margin: 0;
        background: 0 0;
        font-size: 13px;
        text-align: left;
        display: block;
        color: #999;
      }
      .btn{
        border-radius:25px;
        width:100%;
      }
      input:hover{
        background:white;
        border:none;
        outline:none;
        border-bottom:1px solid #ccc;
      }

</style>
<body style="background:#f0f2f8;">
    <!-- <div class="container" style="padding-right:200px;padding-left:200px;"> -->
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-8">
            <img src="image/logimage.png" alt="login" class="login-card-img" style="width: 100%;
    height: 100%;">
            
          </div>
          <div class="col-md-4 card1">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="image/logo.jpg" alt="logo" class="logo" >
              </div>
              <p class="mt-4 brand-wrapper"><b>Login</b></p>
              <form method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control shadow-none" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control shadow-none" placeholder="***********">
                  </div>
                  <p class="mb-4"><a href="#!" class="forgot-password-link mb-4">Forgot password?</a></p>
                  <input name="login" id="login" class="btn btn-primary login-btn mb-4" type="submit" value="Login">
                </form>
                
                
            </div>
          </div>
        </div>
     
    <!-- </div> -->
    </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
