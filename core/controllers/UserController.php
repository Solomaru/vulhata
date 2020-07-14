<?php

class UserController
{
    #выводим профиль пользователя вошедшего в систему
    function action_index(){

        if(Ficha::dostup()){

      echo 'usercontroller prfilya';
//         var_dump($_SESSION);

        }else{

           header('Location: /user/login');

        }

     require_once(ROOT . '/core/views/user/profil.php');
    }


    #пишем регистрацию
    function action_regist(){

        #пишем условие с глобальной переменной пост
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

           #filter
            $login = htmlspecialchars(trim($_POST['login']));
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $toopassword = trim($_POST['topassword']);
            //var_dump($_POST);


            #valid
            $errors = false;

            // #на пустату
            // if(empty($login) or empty($email) or empty($password)){
            //     $errors[] = 'Заполните все поля';
            // }
            #Имя и логин не должно быть короче 5-х символов
            // if(strlen($login) < 5){
            //     $errors[] = 'login не должен быть короче 5-ти символов ';
            // }
            #Неправильный email
             // if(!Valid::checkEmail($email)){
             //        $errors[] = 'Неправильный email';
             //    }
            #Паролли не совподают
            // if($password != $toopassword){
            //     $errors[] = 'Пароли не совпадают';
            // }
            #Пароль не должно быть короче 6-ти символов
            // if(strlen($password) < 6){
            //    $errors[] = 'Пароль не должен быть меньше 6 символов';
            // }
            #Пользователь с таким логином уже зарегистрирован
            // if(User::proverkaLogin($login)){
            //   $errors[] =  'Пользователь с таким логином уже зарегистрирован';
            // }

            #Пользователь с такой электронной почтой уже зарегистрирован
            // if(User::proverkaEmail($email)){
            //     $errors[] = 'Пользователь с такой электронной почтой уже зарегистрирован';
            // }
            if($errors == true){
              echo $errors;
            }

           #Добавляем в базу
            if($errors == false){
               $key = include ROOT . '/core/config/config.php';
               $password = md5(md5($password) . $key['key']);
//                var_dump($password);
//                exit();
                 $result = User::saveUser($login, $email, $password);
                // header('Refresh: 3; url=/user/login');
            }

        }

    #подключаем шаблон
    require_once(ROOT . '/core/views/user/regist.php');
    }




     //пишем вход на сайт
    //редирект происходит через ява скрипт main-reg.js
    function action_login(){

        if(!Ficha::dostup()){

          if($_SERVER['REQUEST_METHOD'] == 'POST'){


              $auth = new Authorization($_POST['email'], $_POST['password']);
              $result = $auth->singUpUser();

              if (is_array($result)) {

                    $_SESSION['users'] = $result;
                    Lyamb::createDirname($_SESSION['users']['id']);

                 // если все ок то на личный кабинет
                // header('Location: /feed');

                exit();
              } else {
                    $errors[]='Неправильный email пользователя или пароль';
                    echo "Неправильный email пользователя или пароль";
                    exit();
              }
          }
        }else{

         header('Location: /housingsearch');
        }
        header('Location: /housingsearch');
    #подключаем шаблон
    //require_once(ROOT . '/core/views/user/login.php');
    }

    #пишем востонавление пароля и лоигна
    public function action_recover(){

        echo 'recover';

    }

    public function action_logaut(){

        //ubivaem session
        unset($_SESSION["users"]);
        //перенаправляем
        header("Location: /");

    }


    public function action_bookmarks()
    {
          if(Ficha::dostup()){


          require_once(ROOT . '/core/views/user/bookmarket.php');
          }else{
          header('Location: /user/login');
          }
    //end function book
    }

    public function action_friends(){
          if(Ficha::dostup()){




          require_once(ROOT . '/core/views/user/friends.php');
          }else{
          header('Location: /user/login');
          }
    // end functio fren
    }

//end class
}




?>
