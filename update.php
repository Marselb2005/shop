<?php 
//Код на обновление
$connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
$query = mysqli_query($connect,"UPDATE shop SET name ='". $_POST['name'] ."' , price ='". $_POST['price'] . "' , img = 'img/" .  $_FILES['img']['name'] ."' WHERE id=" . $_POST['id']);
	move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
	header("Location: http://marselny/shop/file.php ")
 ?>


