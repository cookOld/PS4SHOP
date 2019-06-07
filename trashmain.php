<meta charset="utf-8">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>


  	<?php $connect = mysqli_connect('127.0.0.1', 'root','','misha_ch_15');
	$query = mysqli_query($connect, 'SELECT * FROM trash');
	$summ = 0;
	?>
	<div class="container">
		<h1><strong><a href="http://storedlyalohov/">Store</a></strong></h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h2>Корзина</h2>
				<?php for($i=0; $i<$query->num_rows; $i++) {?>
				<?php $res = $query->fetch_assoc();?>
				<?php
				$query2 = mysqli_query($connect, 'SELECT * FROM game WHERE id="' . $res['gameid'] .'"');
				$res2 = $query2->fetch_assoc();
				?>
				<div class="mt-3" style="width: 30rem;">
					<div class="row">
						<div>
					    <img style="width: 8rem; height: 10rem "class="img" src="<?php echo $res2['img'] ?>">
					    </div>
					    <div class="pl-3 pt-3">
						<h5><?php echo $res2['name'] ?></h5>
						<p class="mb-0"><?php echo $res2['price']; $summ = $summ + $res2['price'] ?>р.</p>
						<form method="post" action="trashdelete.php">
			  			<button name="id" value="<?php echo $res['id'] ?>" type="submit" class="">удалить из корзины</button>
			  			</form>
			  			</div>
				    </div>
				</div>
				<?php } ?>
			</div>
			<div class="col-4 pt-4">
				<h2>Итого</h2>
				<h5>Сумма:<?php echo $summ ?>р.</h5>
			</div>
		</div>
	</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>