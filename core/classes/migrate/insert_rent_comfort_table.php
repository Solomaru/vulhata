<?php


class InsertRentComfortTable
{


    public static function up(){


        $db = Db::getConection();

        $sql = "INSERT INTO `rent_comfort` (`id`, `name_ru`, `name_us`, `incona`) 
                VALUES ('1', 'Интернет', 'internet', ''), 
                       ('2', 'Холодильник', 'fridge', ''),
                       ('3', 'Кондиционер', 'air_conditioner', ''), 
                       ('4', 'Телевизор', 'tv', ''), 
                       ('5', 'Мебель накухне', 'furniture_kitchen', ''),
                       ('6', 'Мебель в жилой', 'living_room_furniture', ''),
                       ('7', 'Можно с животными', 'possible_with_animals', ''), 
                       ('8', 'Можно с детьми', 'children', ''),
                       ('9', 'Лифт', 'elevator', ''),
                       ('10', 'Мусоропровод', 'garbage_chute', ''),
                       ('11', 'Консьерж', 'concierge', ''),
                       ('12', 'closed_area', '', '')";
        $result = $db->prepare($sql);

      return  $result->execute();



    }


}



?>