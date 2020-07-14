<?php

class Lyamb
{
    public static function dostup()
    {
        if(isset($_SESSION['users']['id'])){
            return true;
        }
        return false;
    }

    public static function segmentUrl()
    {
        $urlDo = $_GET['url'];
        $urlPosle = explode('/', $urlDo);
        return $urlPosle;
    }

    public static function translit($str){

        $str = (string) $str; // преобразуем в строковое значение
        $str = strip_tags($str); // убираем HTML-теги
        $str = trim($str); // убираем пробелы в начале и конце строки
        $str = mb_strtolower($str, "utf-8"); //в нижний регистр

        $sim = array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>'',' '=>'_', ', '=>'_', ','=>'_', '!'=>'','@'=>'','?'=>'','$'=>'');

//        $str = str_replace("_", "-", $str); // заменяем ниж_под на знак минус

        $str = strtr($str, $sim);

        return $str;
        }

    public static function head($a=null)
    {
        $meta['title'] = $a['title'];
        $meta['description'] = $a['description'];
        if(isset($a['js']) or !empty($a['js'])){
          $meta['js'] = $a['js'];
        }


     require_once ROOT . '/core/views/bazes/header.php';
    }

    function createDirname($id){

      if(!file_exists("data/users/".$id)){
        mkdir("data/users/". $id,0777);
        mkdir("data/users/". $id . "/img",0777);
      }
    }
}

?>
