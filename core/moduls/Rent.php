<?php



class Rent
{

    public static function addSelectType($table){

        $pdo = Db::getConection();

        $sql = "SELECT * FROM " . $table;
        $result = $pdo->prepare($sql);
        //$result->bindParam(':table', $table);
        $result->execute();

     return $result->fetchAll(PDO::FETCH_ASSOC);
    }






}




?>