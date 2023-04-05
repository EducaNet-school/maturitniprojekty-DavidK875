<?php
require_once('model.php');

class user_controller{
    public function __construct(){
        $model = new user_model("Jiri","ploralys@email.cz");
        include('view.php');
    }

}
new user_controller;
?>