<?php

class User
{


    #проверка логина на наличие в базе
    public static function proverkaLogin($login){

        $pdo = Db::getConection();

        $sql = "SELECT login FROM user_va WHERE login = :login ";
        $result = $pdo->prepare($sql);
        $result->bindParam(':login', $login);
        $result->execute();

        if($result->fetchColumn()){
            return true;
        }else{
            return false;
        }

    }
    #проверка емаил на наличие в базе
    public static function proverkaEmail($email){

        $pdo = Db::getConection();

        $sql = "SELECT email FROM user_va WHERE email = :email ";
        $result = $pdo->prepare($sql);
        $result->bindParam(':email', $email);
        $result->execute();

        if($result->fetchColumn()){
            return true;
        }else{
            return false;
        }
    }



    #добавляем пользователя

    public static function saveUser($sfera, $login, $email, $password, $name){

//        var_dump($sfera);
//            exit();
        $pdo = Db::getConection();

        $sql = "INSERT INTO users (sfera, login, email, password, name) VALUES(:sfera, :login, :email, :password, :name)";
        $result = $pdo->prepare($sql);
        $result->bindParam(':sfera', $sfera);
        $result->bindParam(':login', $login);
        $result->bindParam(':email', $email);
        $result->bindParam(':password',$password);
        $result->bindParam(':name', $name);
       return $result->execute();
    }

    #вход usera
    public static function proverkaSingUp($email, $password){

        $db = Db::getConection();

        $sql = "SELECT * FROM user_va WHERE email = :email AND password = :password";

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
//   var_dump($user);
//            exit();
        if($user){
            $row['id'] = $user['id'];
            //$row['name'] = $user['name'];
            $row['login'] = $user['login'];
            //$row['aftoritet'] = $user['aftoritet'];

        return  $row;
        }else{
            return false;
        }
    //end function
    }

    // function userProfil($idUser){
    //
    //   $db = Db::getConection();
    //   $sql = "SELECT user_va.login,profil_user.name,fotouser.url_img FROM `user_va`
    //           LEFT JOIN profil_user ON profil_user.user_id = user_va.id
    //           LEFT JOIN fotouser ON fotouser.id_user = user_va.id";
    //   $result = $db->prepare($sql);
    //   $result->execute();
    //   return $result->fetchAll(PDO::FETCH_ASSOC);
    // }

//end class
}


?>
