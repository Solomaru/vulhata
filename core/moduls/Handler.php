<?php
class Handler
{
          public static function markaName($name)
          {
                $pdo = Db::getConection();
                $sql = "SELECT * FROM marka WHERE mark = :name";
                $result = $pdo->prepare($sql);
                $result->bindParam(':name', $name, PDO::PARAM_INT);
                $result->execute();
                $marka = $result->fetchAll(PDO::FETCH_ASSOC);

          return $marka;
         }
         public static function modelName($name)
         {
               $pdo = Db::getConection();
               $sql = "SELECT * FROM model WHERE model = :name";
               $result = $pdo->prepare($sql);
               $result->bindParam(':name', $name, PDO::PARAM_INT);
               $result->execute();
               $model = $result->fetchAll(PDO::FETCH_ASSOC);

         return $model;
        }

      public static function modelid($id)
      {
            $pdo = Db::getConection();
            $sql = "SELECT * FROM model WHERE mark_id = :id";
            $result = $pdo->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $marka_id = $result->fetchAll(PDO::FETCH_ASSOC);

      return $marka_id;
      }


      public static function selectImg($id_post){

        $pdo = Db::getConection();
        $sql = "SELECT url_foto FROM fotocars WHERE id_feed_cars = :id";
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id_post, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
        //end funciton
      }

      public static function delUrl($link){
        $cauntIm = count($link);
        for($i = 0; $i< $cauntIm;$i++){
          $na = 'http://vulavto.loc'; //урл из настройки сайта
          $res[$i] = str_replace($na,"",$link[$i]['url_foto']);

        }
        return $res;
      }
  //end class
}

?>
