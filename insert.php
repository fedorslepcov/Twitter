<<?php 
	

	$connect = mysqli_connect('MySQL-8.2', 'root', '', 'twitter2');
	mysqli_query($connect, 'SELECT * FROM follow');
	mysqli_query($connect, "INSERT INTO follow (name,channel,img) VALUES ('{$_GET["names"]}', '{$_GET["channel"]}', '{$_GET["img"]}' )"); 	



	header("Location: https://11twitter.local/index.php");
	
 ?>
