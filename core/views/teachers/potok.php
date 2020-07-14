<?php  include ROOT . '/core/views/bazes/header.php'; ?>


<div class="table-block-colomn">
    
     <div class="hed-top">
            <a href="/teachers"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>
            <h1>Запись учеников</h1>
    </div>

    <div class="table-block">
     
     <?php if($result):?>
     <?php foreach($result as $res):?> 

        <div class="item-table-block">
            <div class="kurs-name"><?php echo substr($res['title'], 0 , 123); ?>
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            </div>
            <div class="item-potok">
                    <div class="kurs-ili"><?php echo $res['name_ru']; ?></div>
                    <div class="login-p"><?php echo $res['login']; ?></div>
                    <div class="fio-p"><?php echo $res['fio']; ?></div>
                    <div class="tel-p"><?php echo $res['tel']; ?></div>
                    <div class="date-k"><?php echo Ficha::revData($res['data_courses']); ?></div>
                    
            </div>
            <div class="edit-block">
                        <a href="/teacers"><i class="fa fa-list-alt" aria-hidden="true"></i>Заявление</a>
                        <a href="/teacers"><i class="fa fa-pencil" aria-hidden="true"></i>Редактировать</a>
                        <a href="/teacers"><i class="fa fa-trash" aria-hidden="true"></i>Удалить</a>

             </div>
        </div>
    <?php endforeach;?>
    
    <?php else: ?>
     <div class="nozapis">
        <span>Запись отсутствует</span>
        <span class="ban"><i class="fa fa-ban" aria-hidden="true"></i></span>
    </div>
    <?php endif;?>
    

    </div>

</div> 


<?php  include ROOT . '/core/views/bazes/footer.php'; ?>