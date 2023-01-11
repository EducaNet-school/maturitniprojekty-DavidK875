<?php


echo 
"<H1>Ukázka formuláře s jednoduchou kontrolou</h1>
<form method=POST>
<input type='text' placeholder='Jmeno a Prijmeni' name = 'jmeno'>
<input type='text' placeholder='adresa' name = 'adresa'>
<input type='submit' value='odeslat' name='odeslat'>
</form>";
if(isset($_POST["odeslat"])){
	$jmeno = $_POST["jmeno"];
	$exploze =count(explode(" ",$jmeno));
	$adresa = $_POST["adresa"];
	if (strlen($adresa)<10){
		echo "<p style='color:tomato'>Adresa musi obshovat alespon 10 znaku</p>";
	}else{
		echo $adresa;
	}
	if ($exploze<2){
		echo "<p style='color:tomato'>Zadejte jmeno i prijmeni</p>";
	}else{
		echo "<br>".$jmeno;
	}
}