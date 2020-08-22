<?php


class InsetrHomeTypeHomeTable
{


    public static function up(){

        $db = Db::getConection();

        $sql = "INSERT INTO `home_type_home` (`id`, `name_ru`, `name_us`, `incona`) 
                VALUES ('1', 'Панель', 'panel', ''), 
                       ('2', 'Монолит', 'monolith', ''),
                       ('3', 'Кирпич-монолит', 'monolithic_brick', ''), 
                       ('4', 'Кирпич', 'brick', ''),
                       ('5', 'Блок', 'block', '')";
        $result = $db->prepare($sql);

      return  $result->execute();
    }


}




?>