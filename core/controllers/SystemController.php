<?php

class SystemController
{

      function action_index(){



      }

      function action_migrationup(){

        //Достаем название файлов, обрабатываем их, убераем тип файла .php
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

          //Удаляем расширение в название файла
          foreach ($files1 as $key => $file) {

            $arr[$key] = pathinfo($file, PATHINFO_FILENAME);
          }

        //Достаем название файлов из базы migration
        $result = Fichadb::dbMigrate();
         $r[]=  $result;

         for($i = 0 ; $i<count($result); $i++){
           $r[$i] = $result[$i]['name_file'];
         }

        //Сравниваем на совпадения
        if (!empty($r[0])) {
          $res = array_merge(array_diff($r, $arr), array_diff($arr, $r));
        }else {
          $res = $arr;
        }

        if(empty($res[0])){
          echo "Нечего записывать в базу";
          return false;
        }
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

        //Сбрасываем индексы массива
        array_values($name_class);
        array_values($res);
    

        //Записываем в базу, в миграцию название файла create
        foreach ($name_class as $key => $class) {
          $migrate = new $class();
          if($migrate->up()){
            var_dump(Fichadb::saveNameMigrate($res[$key]));
            echo "Успешно отработал класс ". $class ;
          }else{
            echo "Класс не отработал ". $class ;
          }
        }


      }

}



?>
