<?php
require_once("db.php");
require_once("image.model.php");
$imageClass = new image();

$fetchImages = json_decode($imageClass -> fetchImages(), true);

foreach($fetchImages['data'] AS $values){

	echo "<img src='images/" . $values['image_name'] . "' width='200'>" . '<br />';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 

<form method="POST" enctype="multipart/form-data" action="controller.php">
	<input type="file" name="image" accept="image/png, image/jpg, image/jpeg" required>
	<input type="submit" name="btn" value="Submit">
</form>
</body>
</html>