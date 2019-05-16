<?php
//Код на удаление 
$connect = mysqli_connect('127.0.0.1','root','', 'marsel_pn_10');
$query = mysqli_query($connect, "DELETE FROM shop WHERE id= '" . $_POST['text'] .  "'");
header("Location: http://marselny/shop/file.php")
?>
