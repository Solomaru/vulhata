<?php
//namespace core\library\Db;
class Db
{

    public static function getConection(){
    $key = include ROOT ."/core/config/config.php";

//    $pdo = new PDO('mysql:host=localhost;dbname='.self::DB_NAME.';charset=UTF8', self::DB_LOGIN,self::DB_PASS);
        $pdo = new PDO('mysql:host=localhost;dbname='.$key['name_db'].';charset=UTF8', $key['login_db'],$key['pass_db']);
    return $pdo;
    }

}

?>
