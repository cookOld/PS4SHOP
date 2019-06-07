<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$img = $_POST['img'];
	$price = $_POST['price'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
	mysqli_query($conn ,"UPDATE game SET name='" . $name . "' WHERE id='" . $id . "'");
	mysqli_query($conn ,"UPDATE game SET img='" . $img . "' WHERE id='" . $id . "'");
	mysqli_query($conn ,"UPDATE game SET price='" . $price . "' WHERE id='" . $id . "'");
	header('Location: http://storedlyalohov/');
?>