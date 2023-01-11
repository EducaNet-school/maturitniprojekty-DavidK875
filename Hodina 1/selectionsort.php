<?php

$arr = array (10,5,9,6,8,7);
echo "Original ->".implode(", ",$arr);
function swap($arr, $prvni, $druhy){
	$temp = $arr[$druhy];
	$arr[$druhy]=$arr[$prvni];
	$arr[$prvni]=$temp;
	return $arr;
}

function selectionsort($arr){
for($i=0; $i<count($arr)-1; $i++) {
	$min = $i;
	for($j=$i+1; $j<count($arr); $j++) {
		if ($arr[$j]<$arr[$min]) {
			$min = $j;
		}
	}
	$arr=swap($arr,$i,$min);
}
return $arr;
}
echo " <br>Sorted ->".implode(", ",selectionsort($arr));

