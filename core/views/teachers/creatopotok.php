<?php  include ROOT . '/core/views/bazes/header.php'; ?>

        <div class="zapis-form-potok">

        <div class="hed-top">
                <a href="/teachers"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>
                   <h1>Форма Записи потока</h1>
        </div> 
                        
        <?php if(isset($errors) && is_array($errors)):?>

             <?php foreach($errors as $error):?>
                 <h4 class="errorsForm"><?php echo $error;?></h4>
             <?php endforeach;?>

        <?php endif; ?>          
                                           
<form action="/teachers/creatopotok"method="post">
     <div class="block-reg-zap">                        
        <div class="input-form-zap">
            <div class="h-input">Обучение:</div>
                <select name="obuchenie">
                     <option value="0">Выберите из списка</option>
                 <?php foreach($dataObuch as $obuch):?> 
                    <option value="<?php echo $obuch['id'];?>"><?php echo $obuch['name_ru']  ?></option>
                 <?php endforeach;?>
                </select>
       </div>
    </div>
                         
    <div class="tabs-flex">                   
        <div class="tabs">
            <input type="radio" name="inset" value="" id="tab_1" checked>
            <label for="tab_1">Выбрать курс</label>

            <input type="radio" name="inset" value="" id="tab_2">
            <label for="tab_2">Выбрать семинар</label>

            <div id="txt_1"> 
            <div class="block-reg-zap">
                <div class="input-fio-zap">
                      <div class="h-input">Выбрать желаемый курс :</div>
                    <select name="date-kurs">
                    <option value="0">Выберите из списка  курс</option>
                   <?php foreach($dataKurs as $dataK):?> 
                        <option value="<?php echo $dataK['id']; ?>"><?php echo  substr($dataK['title'],0,136); ?></option>
                   <?php endforeach;?>
                    
                    </select>
                </div>
            </div>                         
            </div>
            <div id="txt_2">
               <div class="block-reg-zap">
                    <div class="input-fio-zap">
                      <div class="h-input">Выбрать желаемый семенар :</div>
                    <select name="date-semenar">
                    <option value="0">Выберите из списка семинар</option>
                    <?php foreach($dataSemenar as $dataS):?> 
                         <option value="<?php echo $dataS['id'];?>"><?php echo Ficha::revData($dataS['data_courses']) . ' '. substr($dataS['title'],0,136); ?></option>
                     <?php endforeach;?>
                    </select>
                    </div>
                </div>        
            </div>

        </div>      
    </div>


    <div class="block-reg-zap">
        <div class="input-form-zap">
          <div class="h-input">Введите город:</div>
          <input type="text" name="cite"  placeholder="например г.Москва" class="form-input" id="inputPassword"/>                             
        </div>
        <div class="input-form-zap">
          <div class="h-input">Дата потока:</div>
        <input type="date" name="date_p" max="2020-01-01" min="2018-01-01" value="" class="form-input" id="inputPassword" placeholder="Введите телефон">
        </div>
    </div>
    <div class="block-reg-zap">
        <div class="input-fio-zap">
          <div class="h-input">Введите адрес или место проведения мероприятия(потока):</div>
        <input type="text" name="addres" class="fio-input" id="inputPassword" placeholder="например будет проходить в районе м.ВДНХ">
        </div>
    </div>
  
    <div class="block-reg-zap">
        <div class="input-btn-reg">
        <input type="submit" class="zap-submit" value="Создать" id="reg-btn">
        </div>                                 
    </div>                        
                                 
    </form>  


 <div class="hed-top">       
    <h1>Все потоки</h1>
</div>  
            <?php foreach($potoki as $potok):?>
                <div class="item-table-block">
                    <div class="kurs-name"><?php echo $potok['title']?>
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </div>
                    <div class="item-potok">
                            <div class="kurs-ili"><?php echo $potok['name_ru']?></div>
                            <div class="login-p"><?php echo $potok['cite']?></div>
                            <div class="fio-p"><?php echo $potok['mesto']?></div>
                         
                            <div class="date-k"><?php echo $potok['data_courses']?></div>
                            
                    </div>
                    <div class="edit-block">
                        <a href="/teacers"><i class="fa fa-pencil" aria-hidden="true"></i>Редактировать</a>
                        <a href="/teacers"><i class="fa fa-trash" aria-hidden="true"></i>Удалить</a>

                    </div>
                </div>
            <?php endforeach;?>
</div> 



<?php  include ROOT . '/core/views/bazes/footer.php'; ?>