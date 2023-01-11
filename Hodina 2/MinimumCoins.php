<?php
function minCoins($money){
	$delitele = array(1000,500,200,100,50,20,10,5,2,1);
	$vysledek = array();
	foreach($delitele as $delitel){
		if($delitel <= $money){
			$count = floor($money/$delitel);
			$vysledek[$delitel]=$count;
			$money = $money-($delitel*$count);
		}
	}
	return $vysledek;

}


$penize = 1254;
print_r(minCoins($penize));