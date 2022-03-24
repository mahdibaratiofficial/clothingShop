<?php namespace App\Controllers;

use Core\View;

class HomeController
{
    public function index()
    {
        return View::Render("index",[
            'page'=>"salam"
        ]);
    }
    public function home(){
        echo "Wellcome to Home";
    }
}