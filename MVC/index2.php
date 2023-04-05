<?php
require_once("model.php");

class user_controller{
    public function uzivatel1(){
        $model = new user_model("Jiri","Ploralys@email.cz");
        include("view.php");
    }
    public function uzivatel2(){
        $model = new user_model("Lukas","mamradcatgirls@gmail.com");
        include("view.php");
    }
}
$controller = new user_controller();

if(isset($_GET['action'])){
    $action = $_GET['action'];
}/*else{
    $action = 'view';
}*/

if(method_exists($controller, $action)){
    $controller->$action();
}else{
    echo "invalid action";
}
?>