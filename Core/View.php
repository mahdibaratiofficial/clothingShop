<?php namespace Core;

use Philo\Blade\Blade;

 class View
{
    public static function Render($View="index", $args = [])
    {
        extract($args);
        $file = dirname(__DIR__) . "/App/Views/" . $View . ".php";
        if (is_readable($file)) {
            require $file;
        }
    }

    public static function requireinBaseDirectory($place,$content){
        $file=realpath(__DIR__."/../App/Views")."/{$place}/".$content.".php";
        if(is_readable($file)){
            require $file;
        }else{
            throw new \Exception("404",404);
        }

    }

   /* public static function RenderTemplate($Template, $Args = array())
    {
        $file = realpath(__DIR__."/../App/Views");

        $cash =  realpath(__DIR__."/../Storage/view");

        $blade = new Blade($file,$cash);

        return $blade->view()->make($Template, $Args)->render();
    }
   */
}


?>