<?php
include 'conn.php';
session_start();
 $email = $_SESSION['email'];
     $sql = "SELECT * FROM `user` WHERE `type`='2'";
     $run=mysqli_query($conn,$sql);
    //while( $data=mysqli_fetch_assoc($run)){

    
?>

<!DOCTYPE html>
<html>
<head>
     <title> profile</title>
  <!--  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
    <script src="../assets/js/jquery-3.4.1.js"></script>
   <link rel="stylesheet" href="../assets/css/bootstrap.minn.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body>
	<body>
  <div id="welcome-msg" class="bg-primary text-white p-3 text-center">
    <h1>
      All Images....
</h1>
  </div>

</body>
</body>
        <?php
             while( $data=mysqli_fetch_assoc($run)){
         ?>
    <span class="page-header"><img src="../assets/upload/<?php  echo $data['images']; ?>"></span>
      <?php
       }
       ?>

	</div>
</html>