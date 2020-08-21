<?php

class Fichadb
{
    #По логину вытаскиваем таблицу
    public static function tipTable($login){

        $pdo = Db::getConection();

            $sql = "SELECT * FROM anketa WHERE user_login = :login";
        $result = $pdo->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);

        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);


    }

    #вставляем в нулл
    public static function insAnketa($stol, $login, $elsi){


        $pdo = Db::getConection();

        if($elsi === 'fio'){
           $sql = "UPDATE `anketa` SET `fio` = :stolbec WHERE `anketa`.`user_login` = :login";
        }
        if($elsi === 'tel'){
           $sql = "UPDATE `anketa` SET `tel` = :stolbec WHERE `anketa`.`user_login` = :login";
        }
        if($elsi == 'hepy_day'){
           $sql = "UPDATE `anketa` SET `hepy_day` = :stolbec WHERE `anketa`.`user_login` = :login";
        }
        if($elsi == 'sfera_id'){
           $sql = "UPDATE `anketa` SET `sfera_id` = :stolbec WHERE `anketa`.`user_login` = :login";
        }
        if($elsi == 'staj_id'){
           $sql = "UPDATE `anketa` SET `staj_id` = :stolbec WHERE `anketa`.`user_login` = :login";
        }
        if($elsi == 'job'){
           $sql = "UPDATE `anketa` SET `job` = :stolbec WHERE `anketa`.`user_login` = :login";
        }
        if($elsi == 'shool_id'){
           $sql = "UPDATE `anketa` SET `shool_id` = :stolbec WHERE `anketa`.`user_login` = :login";
        }

        $result = $pdo->prepare($sql);
        $result->bindParam(':stolbec', $stol);
        $result->bindParam(':login', $login);

    return $result->execute();
    }

    public static function entryC($login, $data_k){

        $db = Db::getConection();

        $sql = "SELECT * FROM entrycours WHERE login = :login AND date_kurs_id = :date_k";

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':date_k', $data_k, PDO::PARAM_STR);
        $result->execute();

      if($result->fetchColumn()){
            return true;
        }else{
            return false;
        }

    }

    // Возвращает из базы миграцию
    public static function dbMigrate(){

      $db = Db::getConection();

      $sql = "SELECT `name_file` FROM `migration`";
      $result = $db->prepare($sql);
      $result->execute();

      $res = $result->fetchAll(PDO::FETCH_ASSOC);

      return $res;
    }

    public static function saveNameMigrate($name){
        $d = date('Ymd');
        $db = Db::getConection();

        $sql = "INSERT INTO migration (name_file, date_migration) VALUES(:name_file, :date_migration)";
        $result = $db->prepare($sql);
        $result->bindParam(':name_file', $name);
        $result->bindParam(':date_migration', $d);

      return  $result->execute();

    }

}






?>
