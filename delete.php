<?php
    include "header.php";
    include "menu.php";
    include "footer.php";
    include '../pages/conn.php';
    $id = $_GET['id'];
     $sq = " DELETE FROM `user` WHERE id = $id ";
    mysqli_query($conn,$sq);
   
    	header('location:dashboard.php');
    
?>