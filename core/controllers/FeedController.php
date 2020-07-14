<?php

class FeedController
{

    function action_index(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $htmlInner = $_POST['innerhtml'];
          $textlInner = $_POST['innertext'];

          $text = trim($textlInner);
          //echo strlen($text);
          //$arrImg = $_POST['arrimag'];
          //var_dump($arrImg);
          $arrImg = $_POST['arrimag'];
          $idUser = $_SESSION['users']['id'];

          //validaciya5 < 24
          if(strlen($text) < 24 && $arrImg == NULL){
             echo "redactior pust";
          }else{
            $result = Feed::savePost($htmlInner,$textlInner,$arrImg,$idUser);

              echo $result;
              exit();
          }
      }


      //достаем ленту и объявления
      $feedCars = Feed::selectFeedCarsAll();
      $feedLenta = Feed::selectFeedLentaAll();
      $result = array_merge($feedCars, $feedLenta);
      // echo "<pre>";
      // var_dump($feedCars);
      //     echo "</pre>";
      //exit();

      //Sorteruem array po date
      function cmp($a, $b)
      {
          if ($a["date_post"] == $b["date_post"]) {
          return 0;
          }
        return (strtotime($a["date_post"]) > strtotime($b["date_post"])) ? -1 : 1;
        }
        usort($result, "cmp");

      // echo "<pre>";
      // var_dump($feedLenta);
      //     echo "</pre>";

      //     echo "<pre>";
      //   var_dump($result);
      //     echo "<pre>";
      // exit();

    // главная лента
    require_once(ROOT . '/core/views/feed/main-feed.php');
    }

//end class
}







?>
