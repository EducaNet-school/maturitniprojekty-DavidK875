<?php
class conn{
	private $jmeno = 'root';
	private $database = 'mp';
	private $host = 'localhost';
	private $password;
	
	public static function getConn(){
		try {
		$conn = new PDO("mysql:host=$host",$jmeno,$password, $database);
	}
	catch (PDOException $e){
	echo "connection failed".$e->getMessage();
	}
	}
}
?>