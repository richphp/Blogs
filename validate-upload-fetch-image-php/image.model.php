<?php
class image{
	public function uploadImage($param){
		static $uploadImage;
		$db = new Database();
		$con = $db -> connection();

		$sql = "INSERT INTO `data` (`image_name`) VALUES (:image_name)";

		$stmt = $con -> prepare($sql);

		$stmt -> bindParam(':image_name', $param['image_name'], PDO::PARAM_STR);

		try{
			$stmt -> execute();

			$uploadImage = array('status' => 200, 'error_msg' => null);
		}catch(PDOException $e){
			$uploadImage = array('status' => 500, 'error_msg' => $e -> getMessage());
		}

		return json_encode($uploadImage);
	}

	public function fetchImages(){
		static $fetchImages;
		$db = new Database();
		$con = $db -> connection();
		$flag = 'Y';

		$sql = "SELECT `image_name` FROM `data` WHERE `flag` = :flag";

		$stmt = $con -> prepare($sql);

		$stmt -> bindParam(':flag', $flag, PDO::PARAM_STR);

		try{
			$stmt -> execute();

			$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);

			$fetchImages = array('status' => 200, 'data' => $data, 'error_msg' => null);
		}catch(PDOException $e){
			$fetchImages = array('status' => 500, 'data' => null, 'error_msg' => $e -> getMessage());
		}

		return json_encode($fetchImages);
	}
}

?>