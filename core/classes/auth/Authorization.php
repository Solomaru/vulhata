<?php
//namespace Core\classes;

class Authorization
{
  private $email;
  private $pass;

  function __construct($email, $pass)
  {
    $this->email = htmlspecialchars(trim($email));
    $this->pass = htmlspecialchars(trim($pass));

  }

  function emailValid(){

    if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;

  }

  function passLightValid(){

    if(strlen($this->pass) >= 5){

      $key = include ROOT . '/core/config/config.php';
      $this->pass = md5(md5($this->pass) . $key['key']);

      //return $this->pass;
      return true;
    }
    return false;

  }



// Проверка, есть ли email в базе данных
  function proverkaSingUpdb(){

    $pdo = Db::getConection();

    $sql = "SELECT email FROM user_va WHERE email = :email ";
    $result = $pdo->prepare($sql);
    $result->bindParam(':email', $this->email);
    $result->execute();

    if($result->fetchColumn()){
        return true;
    }else{
        return false;
    }
  }

  function singUpUser(){

    if($this->proverkaSingUpdb() and $this->emailValid() and $this->passLightValid()){

      $db = Db::getConection();

      $sql = "SELECT * FROM user_va WHERE email = :email AND password = :password";

      $result = $db->prepare($sql);
      $result->bindParam(':email', $this->email, PDO::PARAM_STR);
      $result->bindParam(':password', $this->pass, PDO::PARAM_STR);
      $result->execute();
      $user = $result->fetch();

            if($user){
                $row['id'] = $user['id'];
                $row['login'] = $user['login'];

                return  $row;
            }
            return false ;


    }else {
      return false;
    }

  }




}







?>
