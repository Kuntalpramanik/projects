<?php
session_start();
  include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form Design</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
   <script src="../assets/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrapp.min.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
      body{
        margin: 0px;
        padding: 0px;
        background:url(../assets/images/pic2.png) no-repeat fixed;
        background-position: center;
        background-size: cover;
        font-family: sans-serif;
      }
      .loginbox{
        width: 320px;
        height: 420px;
        background:url(../assets/images/bac18.jpg);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;

      }
      .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: 35%;
      }
      h1{
        margin: 0px;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
      }
      .loginbox label{
        margin: 0px;
        padding: 0px;
        font-weight: bold;
      }
      .loginbox input{
        width: 100%;
        margin-bottom: 20px;
      }
      .loginbox input[type="text"],input[type="password"]{
        border:none;
        border-bottom: 1px solid red;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
      }
        .btn{
           width: 260px; 
           border-radius: 20px; 
        }
    </style>
</head>
<body>
  <div class="loginbox">
    <img src="../assets/images/ava.png" class="avatar">
        <h1>Login Here</h1>
        <form action="lawyer_login.php" method="POST">
          <label>Lawyer email:</label>
          <input type="text" name="uname" placeholder="Enter lawyer email" required="">
          <label>Password:</label>
          <input type="password" name="pwd" placeholder="Enter lawyer Password" required=""><br>
          <button type="submit" class="btn btn-info"name="login-btn" required=""><strong>Login</strong></button><br><br>
          <a href="forgot.php">Forgot password?</a><br>
          <a href="../pages/lawyer_registration.php">New Lawyer? Register Here</a><br>
           <a href="../index.php"><i class="fa fa-home"></i>&nbsp;<strong>Home</strong></a></a>
        </form>   
  </div>
</body>
    
<!--  <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> -->
</html>






<?php
   if ( isset($_POST['login-btn'])) {
      $Lawyer_email = $_POST['uname'];
      $Lawyer_password = $_POST['pwd'];
      $sql = "SELECT * FROM `user` WHERE `email`='$Lawyer_email' AND `password`='$Lawyer_password' AND `type`='2'";
      $run=mysqli_query($conn,$sql);
      $row=mysqli_num_rows($run);
      if($row == 1){
        $_SESSION['uk']  = $Lawyer_email;
        header('location:lawyer_dashboard.php');
      } else{
        echo "<p style='color:red;text-align:center;margin-top:35px;'>you are not register..!!</p>";
      }
   }  
?>     

