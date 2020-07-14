<?php

class ArticlesController
{

    function action_index()
    {
      //вывод всех новостей

    }

    function action_categori(){
      $get = Ficha::segmentUrl();

      //Проверяем на категорию
      if (!isset($get[2]) or empty($get[2])) {
        // главная категории
        echo "категори";
        var_dump($get);

      }else {
        // категории

        //Проверяем на существование категории
        $categori = Articles::atricleCategoriAll($get[2]);
        if($categori){

          if (!isset($get[3]) or empty($get[3])) {
            //катигори алл

          }else {
              // тут сама статья и проверка

          }

        }else {
          // ошибка нет такой страници
        }

        // var_dump($get);
        // echo "";
        //Берем и достаем по ид урлу статьи этой категории
        //Проверяем, если есть , то выводим, нет ,кидаем ошибку
        //Загружаем шаблоны

      }

    }


//end class
}
?>
