<?php
class logiForm{

public static function gen(){
	return 
	"	
	<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
    <title>Maturita Project Login Form</title>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'>
  </head>
  <body>
    <header>
      <h1>Maturitní četba - Přihlášení</h1>
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
		<br><input type='submit' name='submit' value = 'Přihlásit se'>
	
	";
}
}