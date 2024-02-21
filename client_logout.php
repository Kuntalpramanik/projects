<?php
session_start();
unset($_SESSION['pass']);
header('location:client_login.php');

?>