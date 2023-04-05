<?php

class user_model{
    public $name;
    public $email;


    public function __construct($nn,$ne){
        $this->name=$nn;
        $this->email=$ne;
    }
}
?>