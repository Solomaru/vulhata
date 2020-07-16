<?php
 //include ROOT . '/core/views/bazes/header.php';
 ?>

<div class="register-form ser_reg">

                    <h3>Регистрации на сайте</h3>
 <?php if($result): ?>
    <h3>Поздравляю, Вы зарегестрированы!</h3>
  <?php else: ?>
            <?php if(isset($errors) && is_array($errors)):?>

               <?php foreach($errors as $error):?>
                    <h4 class="errorsForm"><?php echo $error;?></h4>
               <?php endforeach;?>

            <?php endif; ?>

                     <form class="ser_reg" action="/user/regist"method="post">
                        <div class="input-form-reg">
                         <div class="h-input">Как вас зовут:</div>
                        <input type="text" class="form-input" id="inputEmail" placeholder="Введите Имя" name='name' value="<?php echo $name;?>">
                          </div>
                           <div class="h-input">Кем вы будете на сайте:</div>
                           <div class="sel-form">
                                <select name="sfera">
                                    <option value="0">Покупатель</option>
                                    <option value="1">Продавец</option>
                                    <option value="2">Риелтор</option>
                                </select>
                          </div>

                          <div class="input-form-reg">
                         <div class="h-input">Введите Логин:</div>
                        <input type="text" class="form-input" id="inputEmail" placeholder="Введите Логин" name='login' value="<?php echo $login;?>">
                          </div>
                          <div class="input-form-reg">
                             <div class="h-input">Введите email:</div>
                        <input type="email" class="form-input" id="inputEmail" placeholder="Введите email" name='email' value="<?php echo $email; ?>">
                          </div>
                          <div class="input-form-reg">
                              <div class="h-input">Пароль:</div>
                        <input type="password" class="form-input" id="inputPassword" placeholder="Введите пароль" name='password'>
                          </div>
                          <div class="input-form-reg">
                             <div class="h-input">Повторить пароль:</div>
                           <input type="password" class="form-input" id="inputPassword" placeholder="Повторите пароль" name='toopassword'>
                         </div>
                          <div class="input-btn-reg">
                               <input type="submit" value="Зарегистрироваться" id="reg-btn">
                          </div>
                     </form>
                     <?php endif; ?>

                     <div class="link-reg-vos regist_btn">
                       <a href="#">Востановить</a>
                       <a href="#">Вход</a>
                     </div>
                    </div>
                </div>

<?php
//include ROOT . '/core/views/bazes/footer.php';
?>
