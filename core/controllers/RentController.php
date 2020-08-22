<?php
/*
* Класс страницы ренты , добавить, удалить, редактировать
*
*/

class RentController
{

      function action_index(){

      //Функцая главной страницы Rent
        echo "rent";

      }

      function action_add(){

        // Получение порамитров из базы для отображение во view
        $type_parcing = Rent::addSelectType('home_type_parcing');
        $type_home = Rent::addSelectType('home_type_home');

        // Получение порамитров из view json post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){}
         if($_POST['']){

         } 



        //var_dump($type_home);
        require_once(ROOT . '/core/views/rent/rentadd.php');      
      }

      function action_edit(){

      }

      function action_del(){


        
      }








}





?>
