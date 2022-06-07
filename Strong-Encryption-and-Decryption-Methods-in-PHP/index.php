<?php
class secure{

	private static $chars = "abcdefghyxz|ABCDEFGRTHSXYZ|0123456789";

	private static $cipher = "aes-256-cbc-hmac-sha256"; //aes-256-cbc-hmac-sha256

	private static $option = 0;

	private static $key = "any secrete key";

	private static function randomString($length = 16){
		$sets = explode("|", self::$chars);
		$all = "";
		$random = "";
		foreach($sets as $set){
		$all .= $set;
		}

		$all = str_split($all);

		for($i = 0; $i < $length; $i++){

		$random .= $all[array_rand($all)];
		}

		return $random;

	}

	public static function encrypt($data){
		static $encrypt;

		$iv = self::randomString();

		$encrypt = openssl_encrypt($data, self::$cipher, self::$key, self::$option, $iv);

		return base64_encode($iv . mt_rand(100000, 999999) . $encrypt);
	} 

	public static function decrypt($data){
		static $decrypt;

		$data_enc = substr(base64_decode($data), 22);

		$iv = substr(base64_decode($data), 0, 16);

		$decrypt = openssl_decrypt($data_enc, self::$cipher, self::$key, self::$option, $iv);

		return $decrypt;
	}

}

echo secure::encrypt("Hello Rich PHP") . "<br />";

echo secure::decrypt(secure::encrypt("Hello Rich PHP YOUTUBE"));
?>