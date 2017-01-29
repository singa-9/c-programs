
<?php 

include 'config.php';
include 'header.php';
session_start();
if ($_SESSION['name'] == null) {
	header("location:login.php");
}
?>

<html>
	<head>
		<title> Welcome User </title>
		</head>

		<body>
	<nav class="navbar navbar-inverse">
	<div class="container-float">
	<div class="navbar-header">
      <a class="navbar-brand" href="#">bUDDIES</a>
    </div>
   
	  <ul class="nav navbar-nav navbar-right">
      <li class="active"> <a href="#">Welcome <?php echo $_SESSION['name'] ?>! </a></li>
      <li><a class="navbar-brand" href='logout.php'>Logout</a></li>
      </ul>
 	</div>
    </nav>

 	<div class="container form-group">
 		<div class="col-md-7">
 	<form method="post" action="user_post.php" class="">
 		<TEXTAREA name="user_post" class="form-control" style="height:75px; width:620px; resize:none;" placeholder="What's in your mind..."></TEXTAREA>
 		<br/>
 		<!--<input type="file" name="file" > -->
 		<input type="submit" name="btn1"  value="post" style="float:left;" class="btn btn-info btn-sm">
 		
 	</form>
 </div>


 	</div>
 <div class="container form-group">
 	<div class="col-md-6">
 	<form method="post" action="#" class="">
 		<?php
		include 'config.php';
		$sql = "select * from posts";
		$res = mysql_query($sql);
		while ($row=mysql_fetch_array($res)) {
		?>
		<br/>
		<input type="text" name="read_post" readonly="readonly" style="height:80px; width:602px;resize:none;" value="<?php echo $row['post']; ?>" >
 	 	<br/>
 		<a href="#">Like!</a> &nbsp;&nbsp;&nbsp;<a href="#">Comment!</a> 
 		<hr></hr>
 		<?php } ?>
	 </form>
	</div>
</div>
</body>
</html>