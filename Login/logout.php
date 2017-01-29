<?php
session_start();
if ($_SESSION['role'] == 'admin') {
	$_SESSION['name'] = null;
	$_SESSION['role'] = null;
	session_destroy();

	header("location:login.php");
}
else{
	$_SESSION['name'] = null;
	$_SESSION['role'] = null;
	session_destroy();

	header("location:login.php");
}



?>