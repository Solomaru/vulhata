<?php include ROOT . '/core/views/bazes/header.php';?>

<div class="register-form"> 
                   
                    <h3>Форма Регистрации на сайте</h3>  
 <?php if($result): ?>
    <h3>Поздравляю, Вы зарегестрированы!</h3> 
  <?php else: ?>                     
            <?php if(isset($errors) && is_array($errors)):?>

               <?php foreach($errors as $error):?>
                    <h4 class="errorsForm"><?php echo $error;?></h4>
               <?php endforeach;?>

            <?php endif; ?>
                             
                     <form action="/user/regist"method="post">
                        <div class="input-form-reg">
                         <div class="h-input">Как вас зовут:</div>
                        <input type="text" class="form-input" id="inputEmail" placeholder="Введите Имя" name='name' value="<?php echo $name;?>">
                          </div>
                           <div class="h-input">Ваша сфера:</div>
                           <div class="sel-form">
                                <select name="sfera">
                                    <option value="0">Выберите из списка</option>
                                    <option value="1">Оставить пустым</option>
                                    <option value="2">Логопед</option>
                                    <option value="3">Дефектолог</option>
                                    <option value="4">Педагог ДОУ</option>
                                    <option value="5">Педагог СОШ</option>
                                    <option value="6">Преподаватель ВУЗов</option>
                                    <option value="7">Студент</option>
                                    <option value="8">Гувернер</option>
                                    <option value="9">Родитель</option>
                                    <option value="10">Психолог</option>
                                    <option value="11">Cпециалист здравоохранения</option>
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
                </div>     

<?php include ROOT . '/core/views/bazes/footer.php';?>