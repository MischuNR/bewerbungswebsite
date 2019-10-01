<?php

$nummer = $_POST['nummer'];
$passwort = $_POST['passwort'];

if($nummer == "131213" && $passwort == "11235234")
{
  session_start();
  $_SESSION['ZugriffZeugnisse'] = "Wahr";
  header('Location:index.php#grades');
}

 ?>
