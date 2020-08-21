<?php

class SystemController
{

      function action_index(){



      }

      function action_migrationup(){

        //Достаем название файлов, обрабатываем их, убераем тип файла .php
      //  $dir =  ROOT . '/core/classes/migrate';
      //  $files1 = scandir($dir);
        function myscandir($dir, $sort=0)
          {
          	$list = scandir($dir, $sort);

          	// если директории не существует
          	if (!$list) return false;

          	// удаляем . и .. (я думаю редко кто использует)
          	if ($sort == 0) unset($list[0],$list[1]);
          	else unset($list[count($list)-1], $list[count($list)-1]);
          	return $list;
          }

          $dir = ROOT . '/core/classes/migrate';
          $files1 = myscandir($dir);

          foreach ($files1 as $key => $file) {

            $arr[$key] = pathinfo($file, PATHINFO_FILENAME);
          }

        //Достаем название файлов из базы
         $result = Fichadb::dbMigrate();
         $r[]= $result;
         // foreach ($result as $key => $n_v) {
         //   $resul[] = $n_v;
         // }

         for($i = 0 ; $i<count($result); $i++){
           $r[$i] = $result[$i]['name_file'];
         }
         echo "<pre>";
           print_r($r);
           echo "<br>";
           var_dump($arr);
          exit();
        // if (is_array($result)) {
        //   $res = array_merge(array_diff($result, $arr), array_diff($arr, $result));
        // }else {
        //   $res = $arr;
        // }
        //Сравниваем на совпадения
        $res = array_merge(array_diff($r, $arr), array_diff($arr, $r));

        //Приводим название файла в вид класса и сохраняем название файла
        // Получаем две строки, строка класса, строка название файла
        $name = [];
        foreach ($res as $key => $value) {
          $array = explode("_", $value);
           foreach ($array as $k => $val) {
             $name[$k] =  ucfirst($val);
           }
           $name_class[$key] = implode($name);
        }
        //Создаем файлы которые не совпали

        //Записываем в базу, в миграцию название файла созданова

        foreach ($name_class as $key => $class) {
          $migrate = new $class();
          if( $migrate->up() ){
            var_dump(Fichadb::saveNameMigrate($res[$key]));
          }
        }

        //CreateCategoryTable::up();
        // var_dump($array);
        //   echo "<br>";
        var_dump($result);
        echo "<br>";
        var_dump($name_class);
        //$filename = basename($files1, ".php");
        //print_r($filename);
        echo "string";
      }

}



?>
