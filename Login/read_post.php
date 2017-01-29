<?php
		include 'config.php';
		$sql = "select * from posts";
		$res = mysql_query($sql);
		while ($row=mysql_fetch_array($res)) {
			echo $row['post']."<br/>";
		}
?>