<?php
include "../config.php";
$name = $_POST['find'];
$sql = "select * from tb_login where Firstname like '%$name%' ";
$res = mysql_query($sql);
	 while ($row=mysql_fetch_array($res)) {

?>
<html>	
<head><title></title></head>
<body>
	<div class="container">
		<div class="col-md-8">	
		<table class="table"> 
			<tr><th> S.no. </th><th> Firstname</th> <th> Lastname </th> <th>Email</th> <th>Password</th> <th>Gender</th> <th>Hobbies</th> <th> Edit</th> <th> Delete </th></tr>
			<tr><td><?php echo $count; ?></td><td> <?php echo $row['Firstname']; ?></td> 
			<td> <?php echo $row['Lastname']; ?></td>
		<td> <?php echo $row['Email']; ?></td><td> <?php echo $row['Password']; ?></td>
		<td> <?php echo $row['Gender']; ?></td> <td> <?php echo $row['Hobbies']; ?></td> 
		<td><a href="update.php?id=<?php echo $row['Id'];?>">Update</a></td>
		<td><a href="delete.php?id=<?php echo $row['Id']; ?> ">Delete</a></td>
	</tr>			


	  <?php $count++; } ?>
	</table>
</div>
</div>  <?php } ?>
	</body>
</html>