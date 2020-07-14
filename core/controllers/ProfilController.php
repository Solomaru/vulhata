<?php

class ProfilController
{

    function action_index(){

        #пишем одностраничные страницы и вывод профелей
        if($_GET['url'] == 'osite'){

        require_once(ROOT . '/core/views/main/osite.php');
        }else if($_GET['url'] == 'hellp'){

        require_once(ROOT . '/core/views/main/hellp.php');
        }else if($_GET['url'] == 'support'){

        require_once(ROOT . '/core/views/main/support.php');
        }else{

          //// тащим по логину все из базы
        //  var_dump($_SESSION);
        require_once(ROOT . '/core/views/main/profil.php');
        }


    }

}











?>
