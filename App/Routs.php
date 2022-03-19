<?php
use Core\Router;
$Rout=new Router();
$Rout->Get("/","HomeController@index");
$Rout->Get("product","ProductController@index");
$Rout->Get("product/{slug}","ProductController@product");
$Rout->Get("blog","BlogController@index");
$Rout->Get("blog/{slug}","BlogController@post");
return $Rout;


?>