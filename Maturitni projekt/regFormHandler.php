<?php
include("Class.php");
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
	  <a href='login.php'>Login</a>
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
		<br><input type='submit' name='submit'  value = 'Registrovat se'>
	</form>
	
	<footer>
      <p>&copy; 2023 Registrace</p>
    </footer>
	";
}
  public function register($username, $password) {
    if ($username && $password) {
      $password = password_hash($password, PASSWORD_BCRYPT);
      $this->conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
      header('Location: login.php');
      exit;
    }
  }
}






function register() {  
	if(isset($POST_['submit'])){
	$username = $_POST['jmeno'];
	$password = $_POST['password'];
	echo "ahoj";
    if (!empty($username) && !empty($password)) {
      $password = password_hash($password, PASSWORD_BCRYPT);
	  $user = new user($username,$password);
	  $user->insertIntoDb();
      header('Location: login.php');
      exit;
	}
    }
  }


