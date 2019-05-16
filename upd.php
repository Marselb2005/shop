<meta charset="utf-8">
<form action="update.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img">
	<input type="text" name="name">
	<input type="text" name="price">
	<input type="text" name="id" value="<?php echo $_POST['text']?>">
	<button class="btn btn-success">OK</button>
</form>