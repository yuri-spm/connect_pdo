<?php


namespace Source\Database;

use \PDO;
use \PDOException;

class Connect
{
    private const HOST = "localhost";
    private const USER = "USER";
    private const  PASSWD = "PASSWD";
    private const DBNAME = "DB";

    private const OPTION = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERROMODE_EXCEPTION,
        PDO::ATR_DEFAULT_FETCH_MODE => pdo::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static  $instance;

    public static  function  getInstance():PDO{
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO(
                    "mysql:host=". self::HOST. ";dbname=" .self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    self::OPTION
                );
            }catch (PDOException $exception){
                die("<p class='alert alert-info'>Erro ao conectar</p>>");
                var_dump($exception);
            }
        }
        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private  function  __clone()
    {

    }


}