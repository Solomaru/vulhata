<?php

class Db
{

    public static function getConection(){

    private $key = include ROOT . '/core/config/config.php';
    private const DB_NAME = $key['name_db'];
    private const DB_LOGIN = $key['login_db'];
    private const DB_PASS = $key['pass_db'];

    $pdo = new PDO('mysql:host=localhost;dbname='.self::DB_NAME.';charset=UTF8', self::DB_LOGIN,self::DB_PASS);

    return $pdo;
    }
//    $pdo = new PDO('mysql:host=localhost;dbname=tocart','root','');
}

?>
