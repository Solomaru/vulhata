<?php

class HandlerController
{

  function action_index()
  {
    header('Location: /feed');
  }
  // save foto user pri down
  function action_fotosave()
  {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //img start
        if($_SESSION['users']['id']){
                $idUser = $_SESSION['users']['id'];
                // // Все загруженные файлы помещаются в эту папку
                 $uploaddir = ROOT . "/data/users/" . $idUser . "/img/";
                   // путь картинки для отображение
                 $uriPith = "/data/users/" . $idUser . "/img/";
          }else {
                // 0 users это юзер который не зарегестрирован
               $idUser = 0;
               // // Все загруженные файлы помещаются в эту папку
                $uploaddir = ROOT . "/data/users/0/img/";
                  // путь картинки для отображение
                $uriPith = "/data/users/0/img/";
          }
        //img end
        $dataUrl = $_POST['ids'];
        $nameImg = $_POST['name'];
        // Получаем расширение файла
        $getMime = explode('.', $nameImg);
        $mime = end($getMime);
        // Выделим данные
        $data = explode(',', $dataUrl);
       // Декодируем данные, закодированные алгоритмом MIME base64
        $encodedData = str_replace(' ','+',$data[1]);
        $decodedData = base64_decode($encodedData);
        // Вы можете использовать данное имя файла, или создать произвольное имя.
        // Мы будем создавать произвольное имя!
        $randomName = substr_replace(sha1(microtime(true)), '', 12).'.'.$mime;
        // Создаем изображение на сервере
              if(file_put_contents($uploaddir.$randomName, $decodedData)) {
                 //echo $uriPith.$randomName;
                 $p = 'http://vulavto.loc/' . $uriPith.$randomName;
                 $size = getimagesize($p);
                 $url = $uriPith.$randomName;

                 $content = array($url, $size[0], $size[1]);
                 echo json_encode($content);

                 exit();
              }
              else {
                 // Показать сообщение об ошибке, если что-то пойдет не так.
                 echo "Что-то пошло не так. Убедитесь, что файл не поврежден!";
                 exit();
              }

    }
  header('Location: /feed');
  }
  function action_delfoto(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $urlImageDel = $_POST['urlmg'];
           //var_dump($urlImageDel);
          $na = 'http://vulavto.loc/'; //урл из настройки сайта
          $result = str_replace($na,"",$urlImageDel);
         // var_dump($result);
          unlink($result);
         // if(!unlink($urlImageDel)){
         // return false;
         // }
         // echo $urlImageDel;
         }
    header('Location: /feed');
   }

   function action_modelid(){
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $modelid = $_POST['model_id'];
          // var_dump($moselid);
          // exit();
          $result = Handler::modelid($modelid);
          echo json_encode($result);
          exit();
        }
    header('Location: /feed');
   }



//end class
}



?>
