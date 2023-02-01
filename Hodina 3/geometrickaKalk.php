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
public function vypocObvod(){
	$obvod = $this->sideA*4;
	var_dump($obvod);
	return $obvod;
}

public function vypocObsah(){
	$obsah = $this->sideA*$this->sideA;
	return $obsah;
}
}
class rect{
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
public function vypocObvod(){
	$obvod1 = $this->sideA*2;
	$obvod2 = $this->sideB*2;
	$obvod = $obvod1 + $obvod2;
	return $obvod;
}
public function vypocObsah(){
	$obsah = $this->sideA * $this->sideB;
	return $obsah;
}
}