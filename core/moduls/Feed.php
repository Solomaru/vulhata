<?php

class Feed
{


    public static function savePost($htmlInner,$textlInner,$arrImg,$idUser)
    {
//var_dump($htmlInner);
//var_dump($textlInner);
//var_dump($arrImg);
//var_dump($idUser);
//exit();
      $date_lenta = date("Y-m-d");
      $pdo = Db::getConection();

          $sql = "INSERT INTO `feed_lenta`(date_post,id_user, text_post, html_post) VALUES (:date_post,:id_user,:textpost,:html)";
          $result = $pdo->prepare($sql);
          $result->bindParam('date_post', $date_lenta);
          $result->bindParam(':id_user', $idUser, PDO::PARAM_INT);
          $result->bindParam(':html', $htmlInner);
          $result->bindParam(':textpost', $textlInner);
          $result->execute();
          $id =  $pdo->lastInsertId();

          if(!empty($arrImg) or is_array($arrImg) or isset($arrImg)){
                $sqlimg = "INSERT INTO `fotopost`(urlimg , id_feed_lenta) VALUES (:urlimg,:id_post)";
                foreach ($arrImg as $key => $value) {
                    $result = $pdo->prepare($sqlimg);
                    $result->execute(array(':urlimg'=>$value, ':id_post'=>$id));
                }
          //end if
          }
          return $result->rowCount();
    }


    public static function selectFeedCarsAll(){

      $pdo = Db::getConection();
      $sql = "SELECT feed_cars.id as id_post, feed_cars.*, marka.mark,model.model,cuzov.rusish as cuzov,
    korobka_peredac.rusish as korobka,privod.rusish as privod,dvigatel.rusish as dvigatel,opis_price_cars.*,
    user_va.login,profil_user.name,fotouser.url_img
            FROM `feed_cars`
                LEFT JOIN marka ON marka.id = feed_cars.id_marka
                LEFT JOIN model ON model.id = feed_cars.id_model
                LEFT JOIN cuzov ON cuzov.id = feed_cars.id_cuzov
                LEFT JOIN korobka_peredac ON korobka_peredac.id = feed_cars.korobka_peredac
                LEFT JOIN privod ON privod.id = feed_cars.privod
                LEFT JOIN dvigatel ON dvigatel.id = feed_cars.dvigatel
                LEFT JOIN opis_price_cars ON opis_price_cars.id = feed_cars.opis_price
                LEFT JOIN user_va ON user_va.id = feed_cars.id_user
                LEFT JOIN profil_user ON profil_user.user_id = feed_cars.id_user
                LEFT JOIN fotouser ON fotouser.id_user = feed_cars.id_user";
      $result = $pdo->prepare($sql);
      $result->execute();
      //print_r($result->errorInfo());

    return $result->fetchAll(PDO::FETCH_ASSOC);


    }
    public static function selectFeedLentaAll(){

      $pdo = Db::getConection();

      $sql = "SELECT * FROM feed_lenta";
      $result = $pdo->prepare($sql);
      $result->execute();
      //print_r($result->errorInfo());

    return $result->fetchAll(PDO::FETCH_ASSOC);


    }
//end class feed
}


?>
