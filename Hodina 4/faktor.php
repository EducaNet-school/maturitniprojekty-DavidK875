<?php

function factorial($cislo){
	if($cislo==0)
	{
		return 1;
	}
	else
	{
	return $cislo * factorial($cislo-1);
	}
}
echo factorial(4);
	
	
	