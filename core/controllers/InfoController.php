<?php

class InfoController
{
    
    function action_index(){
        
        $str = 'ТЕХНОЛОГИЯ ДИНАМИЧЕСКОГО МОДЕЛИРОВАНИЯ В ОБУЧЕНИИ ГРАМОТЕ ДЕТЕЙ С ОВЗ';
        echo mb_strtolower($str, 'UTF-8');
        
        
        
    }
    
    #разовый вывод курса
    function action_semenarsarat(){
        
        
        
     require_once(ROOT . '/core/views/info/semenar-s.php');   
    }
    
     function action_coursesarat(){
        
        
    require_once(ROOT . '/core/views/info/courses-s.php');          
    }
}







?>