<?php

namespace App\Models;
use PDO;
abstract class DataBase
{
    protected $pdo;
    protected $table;
    private static $dsn;
    private static $PDO_Option;
    protected function Connect(){
        try {
            self::$dsn=="mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}";
            self::$PDO_Option=[
                PDO::ATTR_DEFAULT_FETCH_MODE=>$_ENV['DEFAULT_FETCH_MODE'],
                PDO::ATTR_ERRMODE=>$_ENV['PDO_ERR_MODE'],
                PDO::ATTR_EMULATE_PREPARES=>$_ENV['EMULATE_PREPARES']
            ];
            return $this->pdo=new PDO(self::$dsn,$_ENV['username'],$_ENV['password'],self::$PDO_Option);
        }catch(\PDOException $e){
            throw new \PDOException("Connect Field!");
        }
    }
}