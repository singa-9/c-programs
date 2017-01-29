<?php
	
	include_once '../config.php';
	date_default_timezone_set('UTC');
	$post = $_POST['user_post'];
	$date = date('y-m-d h:i:s a');
	$sql = "insert into posts (post,time) values ('$post','$date')";
	mysql_query($sql);
	header("location:welcome_admin.php");

?>