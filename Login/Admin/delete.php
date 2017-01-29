<?php
	include '../config.php';
	$id = $_GET['id'];
	echo "
	<script>
	alert('Do you really want to delete it ?')
	</script>
	";
	$sql = "DELETE FROM tb_login WHERE id='$id'";
	mysql_query($sql);



	echo "
	<script>
	alert('Deleted!')
	window.location.href ='welcome_admin.php'
	</script>
	";


?>