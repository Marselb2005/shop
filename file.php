<!--Главная Страница-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop </title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<form action="insert.php" method="POST" enctype="multipart/form-data">
	<div class="admin">
<input type="file" name="img" class="bu">
<input type="" name="name" placeholder="Название игры">
<input type="" name="price" placeholder="Цена игры">
<button class="btn btn-success">
	Добавить
</button>
</div>
</form>



<div  class="row" class="col-3" >
<?php 
$connect = mysqli_connect('127.0.0.1','root','', 'marsel_pn_10');
$query = mysqli_query($connect, "SELECT * FROM shop");
?>
<?php 
for($i=0; $i < $query->num_rows; $i++){
	$result = $query->fetch_assoc();
?>
<div class="col-4" class="ml-5">
	<?php echo '<img src="' . $result['img'] .'">'; ?>
	<h2><?php echo $result['name']; ?></h2>
	<p><?php echo $result['price']; ?></p>
	<p><?php echo $result['post_tex']; ?></p>


	
		<form action="delete.php" method="POST" >
			<input type="hidden" name="text" value=" <?php echo $result['id'] ?>">
			<button class="btn btn-danger">Удалить</button>
		</form>


		<form action='upd.php' method='POST'>
			<button class="btn btn-warning">Редактировать</button>
		</form>
</div>	
<?php } ?>
</div>
</body>
</html>

























 <script type="text/javascript">
 	var humon = {
 		"name":'Marsel',
 		"age":13,
 		"run": function() {
 			console.log('я бегу')
 		}
 	}
 	console.log(humon.name);
 	humon.run();
 	console.log(humon.age);

 	var group = ["Марсель","Саша","Кирилл",function(){
 		console.log('я работаю')
 	}];
 	console.log(group[1]);
 	group[3]()
 	var ab = 'Как дела'
 	console.log('Анна '+ ab + ' Как настоение')


 </script>