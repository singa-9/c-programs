<?php 
include_once "header.php";
?>
	<body>
		<div class="col-md-5" style="margin-left:30% ;">
			<h1 style="margin-left:25% ;"> Register Here!</h1>
	<form action="signin.php" method="post">
		<table class="table"> <tr> <td>
	 <label> First Name </label> </td> <td>
	  <input type="text" name="firstname" placeholder="First Name" size="30" required="required" /> </td> </tr>
	 <tr> <td><label> Last Name </label></td> <td>
	  <input type="text" name="lastname" placeholder="Last Name" size="30" required="required" /> </td> </tr>
	  <tr> <td><label> Email</label></td> <td>
	  <input type="email" name="email" placeholder="Email" size="30" required="required" /> </td> </tr>
	  <tr> <td><label> Password </label></td> <td>
	  <input type="password" name="password" placeholder="Password" size="30" required="required" /> </td> </tr>
	  <tr> <td><label> Contact Number </label></td> <td>
	  <input type="text" name="contact" placeholder="Contact Number" size="30" required="required" /> </td> </tr>
	  <tr> <td><label> Gender</label></td> <td> <input type="radio" value="male" name="gender" /> Male <input type="radio" value="female" name="gender" /> Female </td></tr>
	  <tr> <td>Hobbies</td><td> <input type="checkbox" value="cricket" name="hobbies[]" > Cricket <input type="checkbox" value="football" name="hobbies[]" > Football <input type="checkbox" value="hockey" name="hobbies[]" > Hockey </td></tr>
	  <tr><td colspan="2"><input type="submit" value="submit" class="btn btn-info btn-lg" style="margin-left:30% ;"> </td> </tr>


	</table>
	</form>
</div>
<div class="col-md-2"><p
 style="margin-left:50% ; 
  font: bold 17px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 4px 9px 5px 20px;
  border-top: 2px solid #CCCCCC;
  border-right: 2px solid #333333;
  border-bottom: 2px solid #333333;
  border-left: 2px solid #CCCCCC; margin-top:20%;"><a href="login.php">Login</a></p></div>

	</body>
<?php
include_once 'footer.php';
?>
