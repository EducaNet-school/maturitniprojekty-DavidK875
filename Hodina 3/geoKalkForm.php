<?php
include('geometrickaKalk.php');

class formHandler{
	
public static function generateForm(){
	return 
"
<h1>Geometricka kalkulacka</h1>
<form method='POST'>
<select name='obrazec'>
	<option value='---=---'>---=---</option>
	<option value='Ctverec'>Ctverec</option>
	<option value='Obdelnik'>Obdelnik</option>
	<option value='Trojuhelnik'>Trojuhelnik</option>
</select>
<input type='submit' name='submit'>
"
;
}
public static function formHandling(){
	if (isset($_POST['submit'])){
	$a = $_POST['obrazec'];
	if ($a == "Obdelnik"){
		echo
		"<br>
		<form method='POST'>
		<input type='text' placeholder='zadejte stranu A' name='sA'>
		<input type='text' placeholder='zadejte stranu B' name='sB'>		
		<select name='ObvObs'>
			<option value='---=---'>---=---</option>
			<option value='Obvod'>Obvod</option>
			<option value='Obsah'>Obsah</option>
		<input type ='submit' name='submitS'>";
}elseif ($a == "Ctverec"){
	echo "<br>
		<form method='POST'>
		<input type='text' placeholder='zadejte stranu A' name='sA'>		
		<select name='ObvObs'>
			<option value='---=---'>---=---</option>
			<option value='Obvod'>Obvod</option>
			<option value='Obsah'>Obsah</option>
			<input type ='submit' name='submitS'>";
}elseif ($a == 'Trojuhelnik'){
	echo "<br>
		<form method='POST'>
		<input type='text' placeholder='zadejte stranu A' name='sA'>
		<input type='text' placeholder='zadejte stranu B' name='sB'>		
		<input type='text' placeholder='zadejte stranu C' name='sC'>
		<select name='ObvObs'>
			<option value='---=---'>---=---</option>
			<option value='Obvod'>Obvod</option>
			<option value='Obsah'>Obsah</option>
		<input type ='submit' name='submitS'>
";
	}
}	
}
public static function formFinish(){
	if (isset($_POST['submitS'])){
	$oper = $_POST['ObvObs'];
	$obr = $_POST['obrazec'];
		if ($obr == "Obdelnik"){
		$a = $_POST['sA'];
		$b = $_POST['sB'];
		$obde =new rect($a,$b);
		if ($oper == 'Obvod'){
			return $obde->VypocObvod();
		}elseif($oper == 'Obsah'){
			return $obde->VypocObsah();
		}
}elseif ($obr == "Ctverec"){
		$a = $_POST['sA'];
		$sqr =new sqr($a);
		if ($oper == 'Obvod'){
			return $sqr->VypocObvod();
		}elseif($oper == 'Obsah'){
			echo $sqr->VypocObsah();
		}
}elseif ($obr == 'Trojuhelnik'){
		$a = $_POST['sA'];
		$b = $_POST['sB'];
		$c = $_POST['sC'];
		$tri =new tri($a,$b,$c);
		if ($oper == 'Obvod'){
			return $tri->VypocObvod();
		}elseif($oper == 'Obsah'){
			return $tri->VypocObsah();
			}
	}

}
}
}
echo formHandler::generateForm();
formHandler::formHandling();
echo formHandler::formFinish();