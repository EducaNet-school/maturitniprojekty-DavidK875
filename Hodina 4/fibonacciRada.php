<?php

function fibonacci($pocet){
	if ($pocet == 0){
		return 0;
	}elseif ($pocet == 1){
		return 1;
	}
	else{
		return (fibonacci($pocet-1)+fibonacci($pocet-2));
	}
	
}


function fibonaccihoRada($pocet){
 for($i=0;$i<$pocet;$i++){
	 echo Fibonacci($i)." ";
}
}
echo fibonacci(8);
echo "<br>";
echo fibonaccihoRada(10);
