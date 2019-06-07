<?php
	$name = $_POST['name'];
	$img = $_POST['img'];
	$price = $_POST['price'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
	mysqli_query($conn ,"INSERT INTO game (name, img, price) VALUES ('" . $name . "', '" . $img . "', '" . $price . "')");
	header('Location: http://storedlyalohov/');
?>