<?php
require "../vendor/autoload.php";
require "../App/Bootstrap/ErrorHandler.php";
require "../App/Routs.php";
require "../App/Bootstrap/autoload.php";
load("App/Routs.php");
$Rout->disPatch($_SERVER['QUERY_STRING']);

?>

