
<?php
	include('../config.php');
	if(isset($_POST['btn1'])){
	session_start();
	$id = $_SESSION['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$gender = $_POST['gender'];
	$classs="";
	foreach($_POST['hobbies'] as $class){
     	$classs .=$class;  
	} 
	$sql = "UPDATE tb_login SET Firstname='$firstname', Lastname='$lastname', Email='$email', Password='$password', Contact='$contact', Gender='$gender', Hobbies='$classs' where id='$id'" ;
	mysql_query($sql);

	echo "
	<script>
	window.location.href='welcome_admin.php'
	</script>
	";
}
?>