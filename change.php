<meta charset="utf-8">
 <?php $connect = mysqli_connect('127.0.0.1', 'root','','misha_ch_15');
  $id = $_POST['id'];
  $query = mysqli_query($connect, "SELECT * FROM game WHERE id='" . $id . "'");
  $res =  $query->fetch_assoc();
?>
<form action="change1.php" method="POST">
	<input type="text" name="name" value="<?php echo $res['name'] ?>">
	<input type="text" name="img" value="<?php echo $res['img'] ?>">
	<input type="text" name="price" value="<?php echo $res['price'] ?>">
	<button name="id" value="<?php echo $res['id']; ?>" type="submit">Изменить</button>
</form>