
<form method='POST'>
	<input type = 'text' name = 'sideA' placeholder='A'>
	<input type = 'text' name = 'sideB' placeholder='B'>
	<input type = 'submit' name ='submit'>;
<?php
include ('geometrickaKalk.php');
if (isset($_POST['submit'])){
	$a = $_POST['sideA'];
	$b = $_POST['sideB'];
	if ($a<$b){
		$c=$a;
	}elseif($b>$a){
		$c=$b;
	}
	echo "<br>".sqr::vypocObvod($a)." Obvod ctverce";
	echo "<br>".rect::vypocObvod($a,$b)." Obvod obdelniku";
	echo "<br>".tri::vypocObvod($a,$b,$c)." Obvod rovnoramenného trojuhelniku";
	
	echo "<br>".sqr::vypocObsah($a)." Obsah ctverce"; 
	echo "<br>".rect::vypocObsah($a,$b)." Obsah obdelniku";
	echo "<br>".tri::vypocObsah($a,$b,$c)." Obsah rovnoramenného trojuhelniku";
}