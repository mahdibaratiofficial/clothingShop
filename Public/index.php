<?php

require "../vendor/autoload.php"; // Composer Autoload

require "../App/Bootstrap/autoload.php"; // Load useful information

require "../App/Routs.php"; //require routs
echo  $_SERVER['QUERY_STRING'];
$Rout->disPatch($_SERVER['QUERY_STRING']);

//var_dump($Rout->rout);
?>
