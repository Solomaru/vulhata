<?php



class InsertCategoryRentTable
{


    public static function up(){

        $db = Db::getConection();

        $sql = "INSERT INTO `category_rent` (`id`, `name_ru`, `name_us`, `incona`) 
                VALUES ('1', 'Ищу соседа/соседку', 'neighbor_neighbor', ''), 
                       ('2', 'Совместная аренда', 'shared_rental', ''),
                       ('3', 'Подселюсь', 'get_hooked', ''),
                       ('4', 'Снять', 'remove', ''),
                       ('5', 'Посуточная аренда', 'daily_rent', '')";
        $result = $db->prepare($sql);

      return  $result->execute();

    }



}



?>