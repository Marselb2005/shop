<meta charset="utf-8">
<form action="update.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img" >
	<input type="text" name="name" value="<?php echo $_POST['name']?>">
	<input type="text" name="price"  value="<?php echo $_POST['price']?>">
	<input type="" name="id" value="<?php echo $result['id']?>">

	<button class="btn btn-success">OK</button>
</form>