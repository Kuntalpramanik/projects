<?php
  include 'conn.php';
  session_start();
  if(isset($_POST['reg_btn']))
   {
    $name=$_POST['u_name'];
    $email=$_POST['u_email'];
    $location=$_POST['u_Address'];
    $regdate=$_POST['u_date'];
    $Gender=$_POST['u_gender'];
    $phone=$_POST['u_phone'];
    $password=$_POST['u_password'];
    $type=3;

    $insert_sql="INSERT INTO `user` (`type`, `name`, `email`, `address`, `mobile`, `gender`,`password`,`Date`)
    VALUES ('$type','$name','$email','$location','$phone','$Gender','$password','$regdate')";
    $run=mysqli_query($conn,$insert_sql);

    if($run) 
    {
        $_SESSION['pass']  = $Client_email;
        //header('location:_dashboard.php');
           header('location:client_dashboard.php');

       echo "success";
    }
      else
      {
        echo"register unsuccessful";
      }
    
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/main.css" rel="stylesheet" media="all">

          <style type="text/css">  
        #errName,#errEmail,#errPhone,#errGender,#errAddress,#errBirthdate{
            text-decoration-color: red;
            text-decoration-style: italic;
            text-align: center;
        }
        .input-group{
            font-weight: bold;
            font-family: arialBlack;
            font-style: italic;

        }
        input[type=text]{
            border-radius: 5px;
            border: none;
            box-shadow: pink;
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Client Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" id="u_name" name="u_name" placeholder="NAME" required="">
                            <div id="errName"></div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" id="u_email" name="u_email" placeholder="Enter email" required="">
                            <div id="errEmail"></div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" id="u_Address" name="u_Address" placeholder="Enter your Address" required="">
                            <div id="errAddress"></div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="tel" id="u_phone" name="u_phone" placeholder="Enter Phone" required="">                              
                        </div>
                    <div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <input class="input--style-1 js-datepicker" type="text" id="u_date" name="u_date" placeholder="Enter Registration Date" required="">
                                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>                              
                                </div>
                            </div>    
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="u_gender" id="u_gender" required="">
                                           <option selected="selected" value="">GENDER</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    <div class="input-group">
                           <input class="input--style-1" type="password" id="u_password" name="u_password" placeholder="Enter password" required="">                              
                           </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" id="registration_btn" name="reg_btn">Submit</button>

                            <button class="btn btn--radius btn--green" type="submit" id="registration_btn" name="reg_btn">Cancel</button>



                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../assets/vendor/select2/select2.min.js"></script>
    <script src="../assets/vendor/datepicker/moment.min.js"></script>
    <script src="../assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script type="text/javascript" src="../pages/validation.js"></script>

</html>
<!-- end document-->



