<?php
session_start();
  include 'conn.php';

    if(isset($_POST['reg_btn']))
   {
    $name=$_POST['l_name'];
    //echo "$name";
    $email=$_POST['l_email'];
    //echo "$email";
    $designation=$_POST['l_designation'];
    //ech;o "$designation"
    $date=$_POST['l_date'];
    //echo "$birthdate";
    $Gender=$_POST['l_gender'];
   // echo "$Gender";
    $location=$_POST['l_location'];
    //echo "$location";
    $city=$_POST['l_city'];
    //echo "$city";
    $skills=$_POST['l_skills'];
    //echo "skills";
    $phone=$_POST['l_phone'];
    $password=$_POST['l_password'];
    //$date=$_POST['l_date'];
    $fees=$_POST['l_fees'];
    $image= $_FILES['l_image']['name'];
    $tmpimage=$_FILES['l_image']['tmp_name'];
    $description=$_POST['l_description'];
    $category=$_POST['l_category']; 
    $type=2;
      
      move_uploaded_file($tmpimage,"../assets/upload/$image");

    $insert_sql="INSERT INTO `user`(`type`, `name`, `email`, `address`, `mobile`, `gender`, `skills`, `designation`,`password`,`Date`,`fees`,`images`,`description`,`category`)  VALUES ('$type','$name','$email','$location','$phone','$Gender','$skills','$designation','$password','$date','$fees','$image','$description','$category')";
    $run=mysqli_query($conn,$insert_sql);
    //$row=mysqli_num_rows($run);
    if($run) 
    {
          $_SESSION['uk']  = $Lawyer_email;
      
      
        // header('location: admin_login.php');
      // exit();
        
       // header('location:admin_login.php');
        header("Location:lawyer_dashboard.php");
      
    } 
      else
      {
        echo"register unsuccessful";
       // header("location:lawyer_login.php");

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
        .avatar {
         margin: 10px 0 10px 0;
        }


    </style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Lawyer Registration Info</h2>
                    <form method="POST" onsubmit="return main()" enctype="multipart/form-data">
                      <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" id="l_name" name="l_name"placeholder="NAME" required="">
                            
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" id="l_email" name="l_email" placeholder="enter email" required="">
                            
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" id="l_designation" name="l_designation" placeholder="Designation" required="">
                            
                        </div>
                               <div class="row row-space">
                                   <div class="col-2">
                                      <div class="input-group">
                                        <input class="input--style-1 js-datepicker" type="text" id="l_date" name="l_date" placeholder="Enter Registration Date" required="">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>                  
                                      </div>
                                   </div>  
                                       <div class="col-2">
                                          <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                   <select name="l_gender" id="l_gender" required="">
                                                     <option selected="selected" value="">GENDER</option>
                                                      <option>Male</option>
                                                      <option>Female</option>
                                                      <option>Other</option>
                                                   </select>
                                                    <div class="select-dropdown"></div>
                                                    
                                                </div>
                                          </div>
                                      </div>
                               </div>
                      <div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <input class="input--style-1" type="text" id="l_location" name="l_location" placeholder="Enter Location" required="">                              
                                </div>
                            </div>    
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="l_city" id="l_city" required="">
                                           <option selected="selected" value="">CITY</option>
                                            <option>Kolkata</option>
                                            <option>Mumbai</option>
                                            <option>Delhi</option>
                                            <option>Bangalore</option>
                                            <option>chennai</option>
                                            <option>Hyderabad</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="row row-space">
                          <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="l_skills" id="l_skills">
                                          <option selected="selected" value="">Skills</option>
                                            <option>Government Lawyer</option>
                                            <option>Private sector Lawyer</option>
                                            <option>Criminal Lawyer</option>
                                            <optionL>Trial Lawyer</option>
                                            <option>Corporate Lawyer</option>
                                            <option>Commercial Lawyer</option>
                                            <option>Family Lawyer</option>
                                            <option>Environmental Lawyer</option>
                                            <option>Employment Lawyer</option>
                                            <option>Personal Injury Lawyer</option>
                                            <option>Business Lawyer</option>
                                            <option>Civil Lawyer</option>
                                            <option>Immigration Lawyer</option>
                                            <option>Real Estate Lawyer</option>
                                            <option>Bankruptcy Lawyer</option>
                                            <option>Tax Lawyer</option>
                                            <option>Labor Lawyer</option>
                                            <option>Malpractice Lawyer</option>
                                            <option>Property Lawyer</option>
                                            <option>Estate Planning Lawyer</option>
                                          </select>
                                        <div class="select-dropdown"></div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <input class="input--style-1" type="number" id="l_fees" name="l_fees" placeholder="Enter fees" required="">                              
                                </div>
                            </div>
<!--                            <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                              <div class="input-group">
                                    <input class="input--style-3" type="tel" id="l_phone" name="l_phone" placeholder="Enter ph. no.">
                                </div>
                              </div>
                          </div> -->
                          <div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <input class="input--style-1" type="tel" id="l_phone" name="l_phone" placeholder="Enter phone" required="">                              
                                </div>
                            </div>    
                         <div class="col-2">
                                <div class="input-group">
                                  <input class="input--style-1" type="text" id="l_category" name="l_category" placeholder="Enter category" required="">                              
                                </div>
                    </div>
                       <div class="input-group">
                        <textarea rows="4" cols="60" name="l_description" id="l_description">
                        Enter Description Here...</textarea>
                    </div>
                             <div class="avatar"><lebel>Select your image:</lebel><input type="file" name="l_image" id="l_image"required="" /></div>

                          <div class="input-group">
                           <input class="input--style-1" type="password" id="l_password" name="l_password" placeholder="Enter password" required="">                              
                           </div>
                      </div>
                        <div class="p-t-20">
                            <button href="lawyer_dashboard.php" class="btn btn--radius btn--green" type="submit" id="registration_btn" name="reg_btn">Submit</button>

                            <button href="lawyer_login.php" class="btn btn--radius btn--green" type="submit" id="registration_btn" name="can_btn">cancel</button>


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
<!--<script type="text/javascript" src="../pages/validation.js"></script>-->

</html>
<!-- end document-->



