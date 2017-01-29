
<?php
	include('config.php');
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$gender = $_POST['gender'];
	$role="user";
	$classs="";
	foreach($_POST['hobbies'] as $class){
     	$classs .=$class;  
	} 
	$sql = "INSERT INTO tb_login (Firstname,Lastname,Email,Password,Contact,Gender,Hobbies,Role) VALUES ('$firstname','$lastname','$email','$password','$contact','$gender','$classs','$role')";
	mysql_query($sql);
	echo '<h1> Thank-you Registration Successful! </h1>';
	echo '<a href="login.php"> Click here! to continue </a>'
?>