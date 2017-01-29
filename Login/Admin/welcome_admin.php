<?php 

include '../config.php';
session_start();
if ($_SESSION['name'] == null) {
	header("location:../login.php");
}
$sql = "select * from tb_login";
$res=mysql_query($sql);
$count=1;

	

?>
<html>
	<head>
		<title> Welcome Admin </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		</head>

		<body>
			<nav class="navbar navbar-inverse">
	<div class="container-float">
	<div class="navbar-header">
      <a class="navbar-brand" href="#">bUDDIES</a> 

    </div>
    <div style="margin-top:5px;" class="form-group">
    	<form method="post" action="search.php">
   	<ul class="nav navbar-nav">
   		<li><input type="search" name="find" size="25" placeholder="Search!" class="form-control" style="margin-top:8px;margin-left:200px;"></li>
   		<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	  	
   	</ul></div>
   	 <div style="margin-top:5px;" class="form-group">
   	<ul class="nav navbar-nav">
   		
   		<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	  	 <li> <input type="submit" class="form-control" name="btn2" style="margin-top:8px;"></li>
   	</ul></div>
	</form>
	  <ul class="nav navbar-nav navbar-right">
	  	 
      <li class="active"> <a href="#">Welcome <?php echo $_SESSION['name'] ?>! </a></li>
      <li><a class="navbar-brand" href='../logout.php'>Logout</a></li>
      </ul>
 	</div>
    </nav>
			
		<div class="container">
		<div class="col-md-8">	
		<table class="table"> 
			<tr><th> S.no. </th><th> Firstname</th> <th> Lastname </th> <th>Email</th> <th>Password</th> <th>Gender</th> <th>Hobbies</th> <th> Edit</th> <th> Delete </th></tr>
			<?php while ($row=mysql_fetch_array($res)) { if($row['Role'] == 'user') {  ?>
		<tr><td><?php echo $count; ?></td><td> <?php echo $row['Firstname']; ?></td> 
			<td> <?php echo $row['Lastname']; ?></td>
		<td> <?php echo $row['Email']; ?></td><td> <?php echo $row['Password']; ?></td>
		<td> <?php echo $row['Gender']; ?></td> <td> <?php echo $row['Hobbies']; ?></td> 
		<td><a href="update.php?id=<?php echo $row['Id'];?>">Update</a></td>
		<td><a href="delete.php?id=<?php echo $row['Id']; ?> ">Delete</a></td>
	</tr>			


	  <?php $count++; }} ?>
	</table>
</div>
</div>

 	<div class="container form-group">
 		<div class="col-md-8">
 	<form method="post" action="admin_post.php" class="">
 		<TEXTAREA name="user_post" class="form-control" style="height:75px; width:620px; resize:none;" placeholder="What's in your mind..."></TEXTAREA>
 		<br/>
 		<!--<input type="file" name="file" > -->
 		<input type="submit" name="btn1"  value="post" style="float:left; "class="btn btn-info btn-sm">
 		
 	</form>
 </div>


 	</div>



		</body>
</html>
