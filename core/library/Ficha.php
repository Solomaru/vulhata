<?php



class Ficha
{

    #запоминаем вход в сессию
    public static function dostup(){

        if(isset($_SESSION['users']['id'])){
            return true;
        }
        return false;

    }
    #делаем доступ в учительскую
    public static function dostTeachrs(){

        if(Ficha::dostup() and $_SESSION['users']['aftoritet'] == 5 or $_SESSION['users']['aftoritet'] == 4){

        return true;
        }else{

        return false;
        }


    }

    #достаем урл
    public static function segmentUrl(){

        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $urlSegment = explode('/',$url);
        }
        return $urlSegment;

    }
   #фича переварачивает дату по тере
   public static function revData($data){

       $str = explode('-' , $data);
       $result = array_reverse($str);
       $dat = implode('-', $result);

    return $dat;
   }


    public static function translit($str){

        $str = (string) $str; // преобразуем в строковое значение
        $str = strip_tags($str); // убираем HTML-теги
        $str = trim($str); // убираем пробелы в начале и конце строки
        $str = mb_strtolower($str, "utf-8"); //в нижний регистр
//        $str = str_replace("\n", '', $str);
//        $str = str_replace("&nbsp;",'',$str);
//        $str = str_replace("\r",'',$str);
//         str_replace(array("\r\n", '\r\n', "\r", '\r'), " ", $str);
        preg_replace("/[\r\n]{2,}/i", "\r\n", $str);
        str_replace(array("\r\n", '\r\n', "\r", '\r'), " ", $str);


        $sim = array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>'',' '=>'_', ', '=>'_', ','=>'_', '!'=>'','@'=>'','?'=>'','$'=>'', '\n'=>'');



        $str = strtr($str, $sim);
        $str = str_replace("_", "-", $str); // заменяем ниж_под на знак минус


        return $str;
        }

    public static function stape($r){

        //var_dump($r);
        exit();

    }

}


?>
