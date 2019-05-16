<?php 
//На создание новой записи в таблице в бд
$connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
$query = mysqli_query($connect,"INSERT INTO shop (name, img, price) VALUES ('". $_POST['name'] . "','img/". $_FILES['img']['name'] . "','". $_POST['price'] . "') ");
if(empty($_FILES)){}
	else{
		$img = "img/".rand(00000000,99999999).".jpg";
		move_uploaded_file($_FILES['img']['tmp_name'], $img);
	}
	header("Location:/http://marselny/shop/file.php");
 ?>
 <form method="POST" action="" enctype="multipart/form-data">
 	<input type="file" name="img">
 	<input type="submit" name="submit">
 </form>
