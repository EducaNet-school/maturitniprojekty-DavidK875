<?php

$arr = [12,8,3,4,[14,[5,56]],2];
function arrToString($arr){
	
	foreach ($arr as $prom)
{
	if (gettype($prom)=='array')
	{
		echo arrToString($prom);
	}else{
	echo $prom." ";
}
}
}
arrToString($arr);