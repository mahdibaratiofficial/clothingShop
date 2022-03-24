<?php
require "ErrorHandler.php";
$env= Dotenv\Dotenv::createImmutable(realpath('../'));
$env->safeLoad();

?>