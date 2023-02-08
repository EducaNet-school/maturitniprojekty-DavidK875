<?php

class cekarna{
	private $lide;
	private $ockovani;
	
public function __construct(){
		$this->lide = array();
		$this->lide = array();
}
public function sortArr(){
	usort($this->lide, function(Pacient $pacient1, Pacient $pacient2) {
            if ($pacient1->getVek() < 5 && $pacient2->getVek() >= 5) {
                return -1;
            } else if ($pacient1->getVek() >= 5 && $pacient2->getVek() < 5) {
                return 1;
            } else {
                return 0;
            }
        });
    }


public function pocetLidi(){
	$a = count($this->lide);
	$b = count($this->ockovani);
	return $a+$b;
}

public function prichodDoCekarny($pacient) {
        if ($pacient->jeNaOckovani()) {
			if(count($this->ockovani)==0){
				array($this->ockovani, $pacient);
			}else{
            array_unshift($this->ockovani, $pacient);}
        }else
		{
            array_push($this->lide, $pacient);
        }

        $this->sortArr();
        return $pacient;
    }
	
public function prichodAmbul(){
	$a = $this->lide[0];
	array_splice($this->lide,0,1);
	return $a."a jdu do ordinace<br>";
}
public function test(){
return print_r($this->lide);
}

}
class pacient{
	private $ockovani;
	private $poradi;
	private $vek;
	private $jmeno;
	
	
public function __toString(){
	return "Jsem ".$this->jmeno." je mi ".$this->vek."let.<br>";
}
public function dejPoradi($poradi){
	$this->poradi =$poradi;
}

public function __construct($vek,$jmeno,$ockovani){
	$this->vek=$vek;
	$this->jmeno=$jmeno;
	$this->ockovani=$ockovani;
}
public function jeNaOckovani() {
return $this->ockovani;
}
public function getVek() {
        return $this->vek;
}
}
$pac1=new pacient(4,"David",1);
$pac2=new pacient(20,"Jirka",0);
$pac3=new pacient(19,"Lukas",0);
$cek = new cekarna();
echo $cek ->prichodDoCekarny($pac1);
echo $cek ->prichodDoCekarny($pac2);
echo $cek ->prichodDoCekarny($pac3);
$cek->sortArr();
echo $cek ->prichodAmbul();
echo $cek->pocetLidi();