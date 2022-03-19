<?php

if(!function_exists('load_views')){
    function load_views($section){
        $Base_Dir_View=realpath("../App/Views");
        if(!preg_match("/\.php/",$section)){
            $section.=".php";
        }
        $Base_Dir_View.="/".$section;
        if(is_readable($Base_Dir_View)){
            require_once $Base_Dir_View;
        }else{
            return "File Not Found";
        }
    }
}

if (!function_exists('load')){
    function load($dir){
        $realpath=realpath("../");
        if(is_string($dir)){
            $realpath.="/".$dir;
            if(is_readable($realpath)){
                require $realpath;
            }else{
                echo "not found in load";
            }
        }else if(is_array($dir)){
            foreach ($dir as $key=>$item) {
                $realpath.="/".$item;
                if(is_readable($realpath)){
                    require $realpath;
                }else{
                    echo "not found in load";
                }
            }
        }


    }
}

if(!function_exists('debugmodehabdle')){
    function debugmodehabdle($mode){
        switch (strtolower($mode)){
            case "true":
                return true;
                break;
            case "false":
                return false;
                break;
            case "empty":
                return "";
                break;
            case "null":
                return;
                break;
        }
    }
}

if(!function_exists('load_style')){
    function load_style($file_name){
        $StyleDir="../src/{$file_name}";
        if(is_readable($StyleDir)){
            return $StyleDir;
        }else{
            return  "not found";
        }
    }
}

?>