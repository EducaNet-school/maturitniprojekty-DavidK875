<?php
include("database.php");
class regiForm{
	
public static function gen(){
	return 
	"	
	<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
    <title>Maturita Project Registration Form</title>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'>
  </head>
  <body>
    <header>
      <h1>Maturitní četba - Registrace</h1>
    </header>

    <nav>
      <a href='index.html'>Domovská stránka</a>
      <a href='onas.html'>O nás</a>
      <a href='kontakt.html'>Kontakt</a>
	  <a href='kontakt.html'>Login</a>
	  <a href='registrace.php'>Registrace</a>
    </nav>
	
	<form method = 'POST'>
		<label for='jmeno'>Přezdívka</label><br>
		<input type='text' name='jmeno' id = 'jmeno'><br>
		<label for ='password'>Heslo</label><br>
		<input type='password' name='password'id ='password'<br>
		<br>
		<label for ='password2'>Zadejte heslo znovu</label><br>
		<input type='password' name='password2'id ='password2'<br>
		<br>
		<br><input type='submit' name='submit' value = 'Registrovat se'>
	
	";
}

public static function formValidation(){
	if (isset($_POST['submit'])){
		$conn = conn::getConn;
		$heslo1 = $_POST['password'];
		$heslo2 = $_POST['password2'];
		$jmeno = $_POST['jmeno'];
		$stmt =$conn->prepare("select name from user where name=".$jmeno);
		$stmt->execute();
		if ($stmt == $jmeno){
			return 0;
	}else{
	return 1;
}
}
}
}
//"<scrpit>alert('Toto jmeno se jiz pouziva') </script"