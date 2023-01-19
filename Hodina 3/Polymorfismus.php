<?php

class Auto{
	private $typ;
	private $znacka;

public function __construct($typ,$znacka){
	$this->typ=$typ;
	$this->znacka=$znacka;
}	
	
public function __toString(){
	return "Auto ".$this->typ." Značky ".$this->znacka;
}

public function vratInfo(){
	return $this."<br>";
}

}

class nakladak extends auto{
	private $nosnost;


public function __construct($typ,$znacka,$nosnost){
parent::__construct($typ,$znacka);
	$this->nosnost = $nosnost;
}
public function vratInfo(){
	$a = parent::vratInfo();
	$a .= $this->nosnost;
	return $a."<br>";
}
}
class elektro extends auto{
	private $dojezd;

public function __construct($typ, $znacka, $dojezd){
	$this->dojezd=$dojezd;
	parent::__construct($typ, $znacka);
}
public function vratInfo(){
	$a = parent::vratInfo();
	$a .= $this->dojezd;
	return $a."<br>";
}


}
$auto = new auto("Octavia","Skoda");
$nakladak = new nakladak ("Tatra","Tatra","5 tun");
$elA = new elektro("Model X", "Tesla","500 km");

$pole = [$auto, $nakladak, $elA];

function projedPole($pole){
	foreach ($pole as $auto){
		if ($auto != null){
		echo $auto->vratInfo();
		}
	}
}
projedPole($pole);