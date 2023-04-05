<?php
class missingMoneyException extends Exception {
    public function errorMess() {
        $errorMsg = 'Divák nemá dost peněz';
        return $errorMsg;
    }
}

class customerTooYoungException extends Exception {
    public function errorMess() {
        $errorMsg = 'Divák není dost starý';
        return $errorMsg;
    }
}
class divak {
    private $age;
    private $money;

    public function __construct($age, $money) {
        $this->age = $age;
        $this->money = $money;
    }

    public function getMoney() {
        return $this->money;
    }

    public function getAge() {
        return $this->age;
    }
}

class film {
    private $ageRestr;

    public function __construct($ageRestr) {
        $this->ageRestr = $ageRestr;
    }

    public function getAgeRest() {
        return $this->ageRestr;
    }
}

class kino {
    private $cost = 200;

    public function cashier($divak, $film) {
        try {
            if ($divak->getAge() < $film->getAgeRest()) {
                throw new customerTooYoungException();
            }else{
                $a = 1;
            }
            if ($divak->getMoney() < $this->cost) {
                throw new missingMoneyException();
            }else{
                $b= 1; 
            }
            if($a === $b){
                echo "Prodáno";
            }
        } catch (missingMoneyException $e) {
            echo $e->errorMess();
        }
        catch (customerTooYoungException $e) {
            echo $e->errorMess();
        }
    }
}

$a = new divak(18, 200);
$b = new kino;
$c = new film(18);
$b->cashier($a, $c);
?>
