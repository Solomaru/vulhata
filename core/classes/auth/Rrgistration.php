<?php



class Registration
{
      private $name;
      private $login;
      private $email;
      private $pass;
      private $too_pass;
      private $sfera;


    function __construct($name, $login, $email, $pass, $too_pass, $sfera){
      $this->name = htmlspecialchars(trim($name));
      $this->login = htmlspecialchars(trim($login));
      $this->email = trim($email);
      $this->pass = trim($pass);
      $this->too_pass = trim($too_pass);
      $this->sfera = trim($sfera);
    }

    // Валидация данных при получение

    #на пустату
    public function emptyInputReg(){
      if(empty($this->login) or empty($this->email) or empty($this->pass)){
          $errors[] = 'Заполните все поля';
      }
    }

    #Имя и логин не должно быть короче 5-х символов
    public function lenLoginReg(){
      if(strlen($this->login) < 5){
          $errors[] = 'login не должен быть короче 5-ти символов ';
      }
    }

    #Неправильный email
    public function validEmailReg(){
       if(!Valid::checkEmail($this->email)){
              $errors[] = 'Неправильный email';
          }
    }

    #Паролли не совподают
    public function validTooPassReg(){
      if($this->pass != $this->too_pass){
          $errors[] = 'Пароли не совпадают';
      }
    }

    #Пароль не должно быть короче 6-ти символов
    public function lenPassReg(){

      if(strlen($this->password) < 6){
         $errors[] = 'Пароль не должен быть меньше 6 символов';
      }
    }

    #Пользователь с таким логином уже зарегистрирован
    public function validLoginReg(){
      if(User::proverkaLogin($this->login)){
        $errors[] =  'Пользователь с таким логином уже зарегистрирован';
      }
    }

    #Пользователь с такой электронной почтой уже зарегистрирован
    public function regValidEmailReg(){
      if(User::proverkaEmail($this->email)){
          $errors[] = 'Пользователь с такой электронной почтой уже зарегистрирован';
      }
    }

    public function goodValidReg(){
      $key = include ROOT . '/core/config/config.php';
      $password = md5(md5($this->pass) . $key['key']);
      return User::saveUser($this->login, $this->email, $password);
    }

    public function validErrorsArr(){
      $this->emptyInputReg();
      $this->lenLoginReg();
      $this->validEmailReg();
      $this->validTooPassReg();
      $this->validTooPassReg();
      $this->lenPassReg();
      $this->validLoginReg();
      $this->regValidEmailReg();

      #если масcив пустой , то регистрируем, если нет , то нет
      if(count($errors) > 0){

      return $errors
      }else {

      return $this->goodValidReg();
      }







    }




}








?>
