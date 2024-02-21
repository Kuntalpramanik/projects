<?php
  include '../pages/conn.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	h1{
		text-align: center;
     background-color: lightgreen;
     padding: 20px;
	}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightblue;
  padding: 200px;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1><b><strong> Appoint Lawyer</strong> <b></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

     <label for="name"><b>Name</b></label>
    <input type="text" id="l_name" placeholder="Enter Name" name="name" required>

     <label for="email"><b>Email</b></label>
    <input type="text" id="l_email" placeholder="Enter Email" name="email" required>

     <label for="address"><b>Address</b></label>
    <input type="text" id="l_location" placeholder="Enter Address" name="address" required>

     <label for="designation"><b>Designation</b></label>
    <input type="text" id="l_designation" placeholder="Enter Designation" name="designation" required>

    <label for="register"><b>Register date</b></label>
    <input type="text" id="l_date" placeholder="Enter Register Date" name="register" required>

    <label for="gender"><b>Gender<b>:</label>

            <select id="l_gender">
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Other">Other</option>
            </select>

    <label for="city"><b>City:<b></label>

            <select id="l_city">
                <option value="kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Bangalore">Bangalore</option>
                <option value="chennai">chennai</option>
                <option value="Hyderabad">Hyderabad</option>
            </select>


    <label for="skills"><b>Skills:<b></label>

            <select id="l_skills">
              <option value="Government Lawyer">Government Lawyer</option>
              <option value="Private Lawyer">Private Lawyer</option>
              <option value="Private sector Lawyer">Private sector Lawyer</option>
              <option value="Criminal Lawyer">Criminal Lawyer</option>
              <optionL value="Trial Lawyer">Trial Lawyer</option>
              <option value="Corporate Lawyer">Corporate Lawyer</option>
              <option value="Commercial Lawyer">Commercial Lawyer</option>
              <option value="Family Lawyer">Family Lawyer</option>
              <option value="Environmental Lawyer">Environmental Lawyer</option>
              <option value="Employment Lawyer">Employment Lawyer</option>
              <option value="Personal Injury Lawyer">Personal Injury Lawyer</option>
              <option value="Business Lawyer">Business Lawyer</option>
              <option value="Civil Lawyer">Civil Lawyer</option>
              <option value="Immigration Lawyer">Immigration Lawyer</option>
              <option value="real Estate Lawyer">Real Estate Lawyer</option>
              <option value="Bankruptcy Lawyer">Bankruptcy Lawyer</option>
              <option value="tax Lawyer">Tax Lawyer</option>
              <option value="Labor Lawyer">Labor Lawyer</option>
              <option value="Malpractice Lawyer">Malpractice Lawyer</option>
              <option value="Property Lawyer">Property Lawyer</option>
              <option value="Estate Planning Lawyer">Estate Planning Lawyer</option>                           
</select>

    <label for="phone"><b>Phone:</b></label>
    <input type="tel" id="l_phone" placeholder="Enter Phone" name="phone" required><br><br>


    <label for="psw"><b>Password:</b></label>
    <input type="password" id="l_password" placeholder="Enter Password" name="psw" required>
   
    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" id="l_conpassword" placeholder="Confirm Password" name="psw-repeat" required>
   
   
    <button type="submit" id="registration_btn" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="../pages/lawyer_login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
<?php
  if(isset($_POST['reg_btn']))
   {
    $name=$_POST['l_name'];
    //echo "$name";
    $email=$_POST['l_email'];
    //echo "$email";
    $designation=$_POST['l_designation'];
    //echo "$designation"
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
    
    $type=2;
    


    $insert_sql="INSERT INTO `user`(`type`, `name`, `email`, `address`, `mobile`, `gender`, `skills`, `designation`,`password`,`Date`)  VALUES ('$type','$name','$email','$location','$phone','$Gender','$skills','$designation','$password','$date')";
    $run=mysqli_query($conn,$insert_sql);
    //$row=mysqli_num_rows($run);
    if($run) 
    {
      echo "success";
       header('location:dashboard.php');
          //exit(header("Location: ../admin_login.php"));
      
    } 
      else
      {
        echo"register unsuccessful";
      }
    
   }
   ?>

