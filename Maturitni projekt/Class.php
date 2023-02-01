<?php
include ('database.php');

class user{
	private $id;
	private $nickname;
	private $password;
	private $admin = 0;
	
public function __construct($n,$p){
	$this->nickname=$n;
	$this->password=$p;
}

public function insertIntoDb(){
	$conn = conn::getConn;
	$sql = $conn->prepare("insert into user(jmeno,helso) values('".$this->nickname."','".$this->password."')");
	$sql->execute();
}

public function deleteFromDb(){
	$conn = conn::getConn;
	$sql = $conn->prepare("delte from user where jmeno = '".$this->name."'");
	$sql->execute();
}
}