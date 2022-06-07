<?php
class Database{
	private $host = "localhost";
	private $dbname = "images";
	private $username = "root";
	private $password = "";
	public $con;

	public function connection(){

		$this -> con = null;

		try{
			$this -> con = new PDO("mysql:host=" . $this -> host . ";dbname=" . $this -> dbname, $this -> username, $this -> password);

		}catch(PDOException $e){
			echo "connection failed" . $e -> getMessage();
		}

		return $this -> con;

	}
}

?>