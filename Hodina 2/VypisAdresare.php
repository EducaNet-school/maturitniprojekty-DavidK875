<?php

echo 
"<H1></h1>
<form method=POST>
<input type='text' placeholder='cesta k souboru' name = 'cesta'>
<input type='submit' value='odeslat' name='odeslat'>
</form>";

if(isset($_POST["odeslat"])){ 
	$dir = $_POST["cesta"];
	$results = scandir($dir);
$count = count($results);
foreach($results as $result){
		echo "<br>Filename:".$result;
	}

}