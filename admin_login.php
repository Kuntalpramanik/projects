<?php
session_start();
  include 'conn.php';
    if ( isset($_POST['login-btn'])) {
        $Admin_email = $_POST['uemail'];
        $Admin_password = $_POST['pwd'];
        $sql = "SELECT * FROM `user` WHERE `email`='$Admin_email' AND `password`='$Admin_password' AND `type`='1'";
        $run = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($run);
        if($row > 0) {
            $_SESSION['email']  = $Admin_email;
            header('location:../Adminpanel/dashboard.php');
        } else {
            echo "<p style='color:red;text-align:center;margin-top:35px;'>you are not register..!!</p>";
        }
    }

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
            background:url(../assets/images/mmm.jpg) no-repeat fixed;
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
        <img src="../assets/images/av.png" class="avatar"><i>
        <h1><strong>Login Here</strong></h1></i>
        <form action="admin_login.php" method="POST">
            <label>Admin email:</label>
            <input type="text" name="uemail" placeholder="Enter admin email" required="">
            <label>Password:</label>
            <!--<i class="fa fa-eye"></i>-->
            <input type="password" name="pwd" id="showpw" placeholder="Enter admin Password" required=""><!--<span class="fa fa-eye"></span><button onclick="showpw();">!--></button><br>
            <button type="submit" class="btn btn-info"name="login-btn" required=""><strong>Login</strong></button><br><br>
            <a href="forgot.php">Forgot password?</a><br>
            <a href="../index.php"><i class="fa fa-home text-align-center"></i>&nbsp;<strong>Home</strong></a>
           
        </form>     
    </div>
</body>
</html>
<script>
function showpw(){
    var pw = document.getElementById('showpw');
    if (pw.type == "text") 
        pw.type = "password";
    else
        pw.type = "text";
}
</script>
<?php

?>