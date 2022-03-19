<?php namespace App\Controllers;
use Core\Controller;
use Core\View;
class SeriesController extends Controller
{
    public function Series($slug){
        return View::Render('',[
            "slug"=>$slug
        ]);
    }
}