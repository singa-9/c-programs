<html>	
	<head>
			<title> Login </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<form method="post" action="../connect.php">
			
			<h2 style="margin-left:70px;"> Admin Login</h2>
			<table class="table">
				<tr> <td><label> Email</label></td> <td>
	  			<input type="email" name="email" placeholder="Email" size="30" /> </td> </tr>
	  			<tr> <td><label> Password </label></td> <td>
	  			<input type="password" name="password" placeholder="Password" size="30" /> </td> </tr>
	  			<tr><td colspan="2"><input type="submit" class="btn btn-info btn-lg" style="margin-left:30% ;" value="login" name="btn2"> </td> </tr>
			</table>

	</body>
</html>
