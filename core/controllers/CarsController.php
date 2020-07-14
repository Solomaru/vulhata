<?php

class CarsController
{
  // dostaem users
  //$user_id = User::userProfil($result["id_user"]);
  //  echo "string". $result[0]['id'];
  // echo "<br><pre>";
  // var_dump($result);
  // echo "</pre>";
  //
  // exit();
    function action_index(){


        if($_SERVER['REQUEST_METHOD'] == 'GET'){

            $result = Cars::selectCarsAll($_GET);
        }else {
            echo 'обычная сортировка';
            $result = Cars::selectCarsAll();
        }


    $priv= Cars::selectTableOne('privod');
    $dvig = Cars::selectTableOne('dvigatel');
    $kpp = Cars::selectTableOne('korobka_peredac');
    $cuzov = Cars::selectTableOne('cuzov');
    $marka = Cars::selectTableOne('marka');
    require_once(ROOT . '/core/views/cars/main-cars.php');
    //end function
    }
    function action_addcars(){

        $model = Cars::selectModel();
        $marka = Cars::selectTableOne('marka');
        // var_dump($model);
        // exit();
        // достаем марку и мадель

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          //print_r($_POST);
          $arr_cars = json_decode($_POST['send'],true);
          $arrImg = $_POST['arrImg'];
          $komplekt = json_decode($_POST['komplekt'], true);
          $id_user = $_SESSION['users']['id'];

          $result = Cars::insertCar($arr_cars, $komplekt, $arrImg, $id_user);
          echo '<pre>';
          print_r($arr_cars);
          echo '</pre>';
          echo '<pre>';
          print_r($komplekt);
          echo '</pre>';
          //exit();
        }

      require_once(ROOT . '/core/views/cars/addcars.php');


    }


    function action_avto(){
      $url = Lyamb::segmentUrl();
      if(!isset($url[2]) or empty($url[2])){
          //tut можно сделать страничку с марками и значками
        echo "avto";
      print_r($url);

      }else {
            if(!isset($url[3]) or empty($url[3])){

                    $result = Cars::markaAll($url[2]);
                    if($result){
                      //print_r($result);
                      //podkluchaem views
                      require_once(ROOT . '/core/views/cars/marka-cars.php');
                    }else {
                      echo "not fount avto";
                    }

            }else {
                if(!isset($url[4]) or empty($url[4])){
                  $result = Cars::modelAll($url[3]);
                          if($result){
                              //podkluchaem views
                            require_once(ROOT . '/core/views/cars/model-cars.php');
                          }else{

                          echo "not fount avto";
                          }

                    }else {
                      //берем урл и отсоединяем id
                      $urlDo = $url[4];
                      $urlPosle = explode('-', $urlDo);
                      print_r($urlPosle);

                        //достаем по id car-feed_cars
                        $result = Cars::selectCar($urlPosle[1]);
                        //подключаем  views
                        // echo "<pre>";
                        // print_r($result);
                        // echo "</pre>";
                        require_once(ROOT . '/core/views/cars/id-car.php');
                    }
            }
      }
    // end function
    }








//end class
}



?>
