<?php
var_dump($_FILES['image']) . "<br />";

if($_FILES['image']['type'] == "image/jpeg"){
	echo "ok"  . '<br />';
}else{
	echo "not supported"  . '<br />';
	exit;
}
// imagesx();
// imagesy();
// getimagesize();
// exif_read_data();

//extension=php_mbstring.dll
//extension=php_exif.dll

$image = imagecreatefrompng($_FILES['image']['tmp_name']);

print_r(imagesx($image)) . '<br />';

print_r(imagesy($image)) . '<br />';

print_r(getimagesize($_FILES['image']['tmp_name']))  . '<br />';

$image_data = exif_read_data($_FILES['image']['tmp_name']);

print('<pre>' . print_r($image_data, true) . '</pre>');


?>