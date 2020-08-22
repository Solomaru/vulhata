<?php


class InsertHomeTypeParcingTable
{


    public static function up(){

        $db = Db::getConection();

        $sql = "INSERT INTO `home_type_parcing` (`id`, `name_ru`, `name_us`, `incona`) 
                VALUES ('1', 'Подземная', 'underground', ''), 
                       ('2', 'Закрытая', 'closed', ''),
                       ('3', 'Открытая', 'open', '')";
        $result = $db->prepare($sql);

      return  $result->execute();
    }


}




?>