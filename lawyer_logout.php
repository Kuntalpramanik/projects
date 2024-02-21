<?php
session_start();
if (isset($_REQUEST['logout-lawyer'])) {
	session_destroy();
}
header('location:lawyer_login.php');
?>