<?php
session_start();
  include 'conn.php';
  include '../index.php';
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
        
        .loginbox{
            content: center;
            width: 290px;
            height: 360px;
            background:url(../assets/images/bac18.jpg);
            color: #fff;
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 50px 30px;

        }
        .avatar{
            width: 80px;
            height: 80px;
            border-radius: 90%;
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
            margin-bottom: 10px;
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
           width: 230px; 
           border-radius: 20px; 
        }
    </style>
</head>
<body>
    <div class="loginbox">
        <img src="../assets/images/ava.png" class="avatar">
        <h1>Login Here</h1>
        <form action="client_login.php" method="POST">
            <label>Client email:</label>
            <input type="text" name="uname" placeholder="Enter client email" required="">
            <label>Password:</label>
             <input type="password" name="pwd" placeholder="Enter lawyer Password" required=""><br>
            <button type="submit" class="btn btn-info"name="login-btn" required=""><strong>Login</strong></button><br>
            <a href="forgot.php">Forgot password?</a><br>
            <a href="../pages/client_registration.php">New User? Register Here</a><br>
            <a href="../index.php"><i class="fa fa-home"></i>&nbsp;<strong>Home</strong></a></a>
        </form>     
    </div>
</body>
    
<!--    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> -->
</html>






<?php
   if ( isset($_POST['login-btn'])) {
     $Client_email = $_POST['uname'];
     $Client_password = $_POST['pwd'];
     $sql = "SELECT * FROM `user` WHERE `email`='$Client_email' AND `password`='$Client_password' AND `type`='3'";
     $run=mysqli_query($conn,$sql);
     $row=mysqli_num_rows($run);
    if($row == 1){
        $_SESSION['pass']  = $Client_email;
        header('location:client_dashboard.php');
    }
    else{
        echo "<p style='color:red;text-align:center;margin-top:35px;'>you are not register..!!</p>";
    }
}
?>