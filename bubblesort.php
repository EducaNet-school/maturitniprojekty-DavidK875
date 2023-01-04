<?php 
function swap($arr, $prvni, $druhy){
	$temp = $arr[$druhy];
	$arr[$druhy]=$arr[$prvni];
	$arr[$prvni]=$temp;
	return $arr;
}
	
function bubblesort($arr){
for($i=0; $i<count($arr)-1; $i++) {
	for($j=$i+1; $j<count($arr); $j++) {
		if (empty($arr[$j+1])){
		return $arr;}else{
		if ($arr[$j]<$arr[$j+1]) {
			$arr=swap($arr,$j,$j+1);
		}
		}
	}
	return $arr;
}
};

$arr = array (10,5,9,6,8,7);
echo "Original ->".implode(", ",$arr);
echo " <br>Sorted ->".implode(", ",bubblesort($arr));