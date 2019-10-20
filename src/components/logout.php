<?php
session_start();
unset($_SESSION["ZugriffZeugnisse"]);
session_destroy();
header("location:/index.php");


 ?>
