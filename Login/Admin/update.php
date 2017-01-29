<?php 
include_once '../config.php';
$id = $_GET['id'];
session_start();
$_SESSION['id'] = $id;
$sql = "select * from tb_login where id='$id'";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)){
?>
<html>	
	<head>
			<title> Update </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
		<div class="col-md-5" style="margin-left:30% ;">
			<h1 style="margin-left:25% ;"> Update!</h1>
	<form action="final_update.php" method="post">
		<table class="table"> <tr> <td>
	 <label> First Name </label> </td> <td>
	  <input type="text" name="firstname" placeholder="First Name" size="30" required="required" value="<?php echo $row['Firstname']; ?>" /> </td> </tr>
	 <tr> <td><label> Last Name </label></td> <td>
	  <input type="text" name="lastname" placeholder="Last Name" size="30" required="required" value="<?php echo $row['Lastname']; ?>" /> </td> </tr>
	  <tr> <td><label> Email</label></td> <td>
	  <input type="email" name="email" placeholder="Email" size="30" required="required" value="<?php echo $row['Email']; ?>" /> </td> </tr>
	  <tr> <td><label> Password </label></td> <td>
	  <input type="text" name="password" placeholder="Password" size="30" required="required" value="<?php echo $row['Password']; ?>" /> </td> </tr>
	  <tr> <td><label> Contact Number </label></td> <td>
	  <input type="text" name="contact" placeholder="Contact Number" size="30" required="required" value="<?php echo $row['Contact']; ?>" /> </td> </tr>
	  <tr> <td><label> Gender</label></td> <td> <input type="radio" value="male" name="gender" /> Male <input type="radio" value="female" name="gender" /> Female </td></tr>
	  <tr> <td>Hobbies</td><td> <input type="checkbox" value="cricket" name="hobbies[]" > Cricket <input type="checkbox" value="football" name="hobbies[]" > Football <input type="checkbox" value="hockey" name="hobbies[]" > Hockey </td></tr>
	  <tr><td colspan="2"><input type="submit" name="btn1" value="Update" class="btn btn-warning btn-lg" style="margin-left:30% ;"> </td> </tr>

	  <?php } ?>
	</table>
	</form>
</div>
	</body>
</html>