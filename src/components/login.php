<?php

$number = $_POST['numberLogin'];
$password = $_POST['passwordLogin'];

if($number == "131213" && $password == "11235234")
{
  session_start();
  $_SESSION['AccessGrades'] = "true";
  header('Location:index.php#grades');
}

 ?>
