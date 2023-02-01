<?php
include("regFormHandler.php");
echo regiForm::gen();
regiForm::register();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  (new User)->register($_POST['username'], $_POST['email'], $_POST['password']);
}
