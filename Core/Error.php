<?php

namespace Core;

class Error
{
    public static function ErrorHandler($error_level, $err_message, $err_file, $err_line)
    {
        if (error_reporting() != 0) {
            throw new \ErrorException($err_message, 0, 1, $err_file, $err_line);
        }
    }

    public static function ErrorExceptionHandler($exception)
    {

        $code = $exception->getCode();
        if ($code != 404) {
            $code = 500;
        }
        http_response_code($code);
//        Custom Error Message.
        $message = "\n<h1>Error Message : {$exception->getMessage()}</h1>\n";
        $message .= "\n<h4> File : {$exception->getFile()} in Line : {$exception->getLine()}</h4>\n";
        $message .= "\n<pre> {$exception->getTraceAsString()} </pre>\n";
        if (debugmodehabdle($_ENV['DEBUGMODE'])) {
            echo $message;
        } else {
            $log = dirname(__DIR__) . "/Storage/logs/" . date("Y-m-d") . ".txt";
            ini_set('error_log', $log);
            error_log($message);

        }
    }
}