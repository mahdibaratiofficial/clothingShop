<?php
use Core\Router;
$Rout=new Router();
$Rout->Get("/home","HomeController@home");
$Rout->Get("/","HomeController@index");

return $Rout;


?>