<?php


class CreateHomeTypeParcingTable
{


    public static function up(){


        $pdo = Db::getConection();

        $sql = "CREATE TABLE `home_type_parcing` (
  `id` INT(11) NOT NULL,
  `name_ru` VARCHAR(25) NOT NULL,
  `name_us` VARCHAR(25) NOT NULL,
  `incona` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`)
) ";

        $result = $pdo->prepare($sql);
        return $result->execute();


    }




}





?>
