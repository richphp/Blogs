<?php
require_once("db.php");
require_once("image.model.php");
$imageClass = new image();

if(!empty($_FILES['image']['name']) && isset($_FILES['image']['name'])){

	if(
		(
			$_FILES['image']['type'] == 'image/png' ||
			$_FILES['image']['type'] == 'image/jpg' ||
			$_FILES['image']['type'] == 'image/jpeg' 
		)
	){
		$image = getimagesize($_FILES['image']['tmp_name']);
		if($image[0] == $image[1] && $image[0] > 100 && $image[1] > 100 && $image[0] < 1000 && $image[1] < 1000){

			if($_FILES['image']['size'] < 2097152){

				$param['image_name'] = filter_var($_FILES['image']['name'], FILTER_UNSAFE_RAW);

				$uploadImage = json_decode($imageClass -> uploadImage($param), true);

				if($uploadImage['status'] == 200){
					move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
					echo "Image upload successfully";
					exit;
				}else{
					echo "please try again";
					exit;
				}

				

			}else{
				echo "please select size less then 2MB.";
				exit;
			}

		}else{
			echo "please select image in between 100x100 to 1000x1000.";
			exit;
		}

	}else{
		echo "please select png or jpg files";
		exit;
	}

}else{
	echo "file not selected";
	exit;
}

?>