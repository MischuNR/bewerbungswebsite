<?php
session_start();
unset($_SESSION["ZugriffZeugnisse"]);
unset($_SESSION["ZugriffSarah"]);
session_destroy();
header("location:/index.php");


 ?>
