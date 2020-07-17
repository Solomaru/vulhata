<?php

class Db
{

    public static function getConection(){

      $key = include ROOT . '/core/config/config.php';


    $pdo = new PDO('mysql:host=localhost;dbname='.$key['name_db'].';charset=UTF8',
    $key['login_db'],
    $key['pass_db']
      );


       return $pdo;
    }
//    $pdo = new PDO('mysql:host=localhost;dbname=tocart','root','');
}

?>
