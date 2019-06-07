<?php 
	$id = $_POST['id'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
	mysqli_query($conn, "DELETE FROM game WHERE id='$id'");
	header('Location: http://storedlyalohov/');
?>