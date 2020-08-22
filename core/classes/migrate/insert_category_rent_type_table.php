<?php


class InsertCategoryRentTypeTable
{


    public static function up(){


        $db = Db::getConection();

        $sql = "INSERT INTO `category_rent_type` (`id`, `name_ru`, `name_us`, `incona`) 
                VALUES ('1', 'Квартира', 'apartment', ''), 
                       ('2', 'Комната', 'room', ''),
                       ('3', 'Дом', 'home', '')";
        $result = $db->prepare($sql);

      return  $result->execute();

    }



}


?>