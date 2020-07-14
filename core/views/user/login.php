

<div class="register-form">
    <h3>Форма входа на сайт</h3>

     <?php if(isset($errors) && is_array($errors)):?>

         <?php foreach($errors as $error):?>
             <h4 class="errorsForm"><?php echo $error;?></h4>
         <?php endforeach;?>

      <?php endif; ?>
      <div class="errors"></div>
     <form action=""method="post">

          <div class="input-form-reg">
             <div class="h-input">Введите email:</div>
        <input type="email" class="form-input" name="email" id="inputEmail" placeholder="Введите email">
          </div>
          <div class="input-form-reg">
              <div class="h-input">Пароль:</div>
        <input type="password" class="form-input" name="password" id="inputPassword" placeholder="Введите пароль">
          </div>
          <div class="input-btn-reg">
               <!-- <input type="submit" value="Вход" id="reg-btn"> -->
               <a id="reg-btn">Вход</a>
          </div>
     </form>

     <div class="link-reg-vos">
       <a href="#">Востановить</a>
       <a href="#">Создать аккаунт</a>
     </div>

</div>
