<?php 
	$gameid = $_POST['gameid'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
	mysqli_query($conn ,"INSERT INTO trash (gameid) VALUES ('" . $gameid . "')");
	header('Location: http://storedlyalohov/');
?>