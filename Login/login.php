<html>	
	<head>
			<title> Login </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
		<div class="container">
		<div class="col-md-10"></div><div class="col-md-2"><p style=" padding: 14px 19px 15px 40px;" ><a href="index.php" >Resister!</a></p></div>
		<div class="col-md-4" style="margin-left:7% ;">
			<h2 style="margin-left:70px;">Login</h2>
		<form method="post" action="connect.php">
			<table class="table">
				<tr> <td><label> Email</label></td>
				 <td> <input type="email" name="email" placeholder="Email" size="30" /> </td> </tr>
	  			<tr> <td><label> Password </label></td> <td>
	  			<input type="password" name="password" placeholder="Password" size="30" /> </td> </tr>
	  			<tr><td colspan="2" ><input type="submit" class="btn btn-info btn-lg" style="margin-left:30% ;" value="login" name="btn1"> </td> </tr>
			</table>
		</div>
	</div>
	</body>
</html>