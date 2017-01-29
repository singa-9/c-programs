<?php
include 'config.php';
if(isset($_POST['btn1'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "select * from tb_login where Email = '$email' and Password = '$password' ";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
if($row != null){
	session_start();
	$fname = $row['Firstname'];
	$lname = $row['Lastname'];
	$role = $row['Role'];
	$_SESSION['name'] = $fname;
	$_SESSION['role'] = $role;
}	
	else{
	echo "<h1> Invalid Email or Password </h1>";

}
}
if ($role =='admin') {
	header("location:Admin/welcome_admin.php");
}
else if($role == 'user'){
header("location:welcome_user.php");
}
?>