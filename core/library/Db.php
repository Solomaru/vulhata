<?php

class Db
{

    public static function getConection(){

       $pdo = new PDO('mysql:host=localhost;dbname=db_vulhata;charset=UTF8','solomaru','111111');


       return $pdo;
    }
//    $pdo = new PDO('mysql:host=localhost;dbname=tocart','root','');
}

?>
