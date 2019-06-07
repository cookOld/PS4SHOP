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
$query = mysqli_query($connect, 'SELECT * FROM game');
?>
<!-- Админ панель-->
<div class="container">
  <div class="row">
    <div>
      <form method="post" action="post.php">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="img" placeholder="img">
        <input type="text" name="price" placeholder="price">
        <button type="submit">1</button>
      </form>
    </div>
    <div class="ml-auto">
      <a href="http://storedlyalohov/trashmain.php">
        <h5>Корзина(<?php $query5 = mysqli_query($connect, 'SELECT * FROM trash'); echo $query5->num_rows;?>)</h5>
      </a>
    </div>
  </div>
</div>
<!-- /Админ панель-->

<!-- Товары-->
<div class="container d-flex flex-wrap">
<?php for($i=0; $i<$query->num_rows; $i++) {?>
<?php $res = $query->fetch_assoc();?>
<div class="card col-3 mt-4" style="height: 29rem; border:none">
  <img style="height: 14rem "class="card-img-top" src="<?php echo $res['img'] ?>">
  <div class="card-body" style="background-color: #ECECEC">
    <div style="height: 3rem ">
	  <h5><?php echo $res['name'] ?></h5>
    </div>
    <div class="text-center" style="height: 6rem">
      <form method="post" action="trash.php">
      <button name="gameid" value="<?php echo $res['id'] ?>" type="submit" class="btn"><img src="images/cart.svg" class="img"><span><p><?php echo $res['price'] ?>р.</p></span></button>
      </form>
  	  <form method="post" action="delete.php">
  	  <button name="id" value="<?php echo $res['id'] ?>" type="submit" class="">удалить</button>
  	  </form>
  	  <form method="post" action="change.php">
  	  <button name="id" value="<?php echo $res['id'] ?>" type="submit" class="">изменить</button>
  	  </form>
    </div>
  </div>
</div>
<?php } ?>
</div>
<!-- /товары -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>