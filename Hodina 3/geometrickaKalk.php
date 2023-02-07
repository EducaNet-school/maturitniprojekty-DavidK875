<?php
#tady jsou ulozene objekty


class sqr{ //ctverec
	private $sideA;
	
public function __construct($a){
$this->sideA = $a;
}

public function __toString(){
	return "Toto je obrazec se stranou a = ".$this->sideA;
}
public static function vypocObvod($a){
	$obvod = $a*4;
	return $obvod;
}

public static function vypocObsah($a){
	$obsah=$a*$a;
	return $obsah;
}
}
class rect {
	private $sideA;
	private $sideB;

public function __construct($a,$b){
	$this->sideA=$a;
	$this->sideB = $b;
}

public function __toString(){
	$a =parent::__toString;
	$a .= "a se stranou = B".$this->sideB;
	return $a;
}
public static function vypocObvod($a,$b){
	$obvod = ($a*2)+($b*2);
	return $obvod;
}
public static function vypocObsah($a,$b){
	$obsah = $a * $b;
	return $obsah;
}
}

class tri{
	private $sideA;
	private $sideB;
	private $sideC;
	
public function __construct($a,$b,$c){
	$this->sideA = $a;
	$this->sideB = $b;
	$this->sideC = $c;
}
public static function checkValidity($a,$b,$c){
	if ($a+$b>$c or $a+$c>$b or $b+$c>$a){
		return 1;
	}else{
		return 0;
	}

}
public static function vypocObsah($a,$b,$c){
	$p = ($a+$b+$c) / 2;
        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}
public static function vypocObvod($a,$b,$c){
	$pocet = $a + $b + $c;
	return $pocet;
}
}