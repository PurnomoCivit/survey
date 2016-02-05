<?php
require 'modelLogin.php';

$nm_user = mysql_real_escape_string($_GET['username']);
$pass = mysql_real_escape_string($_GET['password']);

$prosesLogin = new modelLogin();
$prosesLogin->setNm_user($nm_user);
$prosesLogin->setPassword($pass);

$prosesLogin->getSelectLogin();

?>
