<?php
print_r($_SESSION);
//include ROOT . '/core/views/bazes/header.php';
$a['title']= 'Vulavto социальная сеть автовладельцев';
$a['description']='Добавление услуги на сайт';
$a['js'][0] = 'main-feed.js';
Lyamb::head($a);
 ?>

 <div class="kupi-conteiner-row">
   <!--  left menu-->
   <?php  include ROOT . '/core/views/bazes/block-vip.php'; ?>
 <div class="main-lenta">
   <div class="divRedactor">
     <div id="PosterRedactor" class="pisaninka" contenteditable="true">
        <p><br></p>
     </div>
     <div id="conteiner-image">
     </div>
     <div class="nagimalka">
       <div class="but-icon">
          <a href="#" id="imgBtn" class="imegi-up-ico"></a>
       </div>

       <div id="butSave" class="but-knop">
         <a href="#">Отправить</a>
       </div>
     </div>
     <div id="conteiner-image"></div>
   </div>
    <!-- end redaktor -->


    <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <!-- <p>Модельное окно</p> -->
     <form id="frm" >
          <div id="drop-area">
           <h3 class="drop-text">Перетащите изображение</h3>
              <input type="file" id="file-input" name="file_img"/>
           </div>
      </form>
        </div>
    </div>
<?php foreach($result as $kae => $value):?>
<?php if($value['id_categori_post'] == 1):?>
   <!-- start post -->
   <div class="conteiner-block-post box-block">
     <div class="heder-post">
       <div class="avatar-post">
         <img src="assets/images/avto.jpg" alt="">
         <a href="#">Вячеслав</a>
       </div>
       <div class="date-post">20.06.2018</div>
       <div class="icon-heder-post"></div>
     </div>
     <div class="content-post">
       <div class="text-post">
         <div class="text-content">
           Эксперимент с запуском удался. Технология позволяет нам закрывать всё больше и
           больше задач, уже сегодня реализованы подключения заправки и ёмкостей хранения
           топлива, счётчиков воды и т.д.»
         </div>
         <div class="image-content">
           <img src="assets/images/avto.jpg" alt="">
         </div>
       </div>
       <div class="but-post">
         <div class="icon-result">
           <div class="like-ico"></div>
           <div class="like-ico-result">0</div>
         </div>
         <div class="icon-result">
           <div class="coment-ico"></div>
           <div class="coment-ico-result">0</div>
         </div>
         <div class="icon-result">
           <div class="repost-ico"></div>
           <div class="repost-ico-result">0</div>
         </div>
         <div class="icon-result">
           <div class="bookmarks-ico"></div>
           <div class="repost-ico-result">0</div>
         </div>
       </div>
       <div class="coment-post"></div>
     </div>
   </div>
<!-- end post -->
<?elseif ($value['id_categori_post'] == 2):?>
<?php
$image = Handler::selectImg($value['id_post']);
$img = Handler::delUrl($image);
?>
<!-- start car post  -->
<div class="item-avto-block box-block" >

  <div class="heder-post">
    <div class="avatar-post">
      <img src="/data/users/<?=$value["id_user"];?>/img/<?=$value["url_img"];?>" alt="">
      <a href="/<?=$value["login"];?>"><?=$value["login"];?></a>
    </div>
    <div class="date-post"><?=$value["date_post"];?></div>
     <span class="header-price"><?= number_format( $value["price"], 0, ',', ' ' );?> <i class="fas fa-ruble-sign"></i></span>
    <div class="icon-heder-post"></div>
  </div>
  <div class="image-block">
    <div class="image-one">
      <img src="<?= $img[0]?>" alt="">
    </div>
    <div class="item-content-block">
      <div class="item-title block-row">
          <a href="#"><?= $value["mark"];?> <?= $value["model"];?></a>
          <!-- <span>250 000 <i class="fas fa-ruble-sign"></i></span> -->
      </div>
      <div class="cont-car-block block-row">
          <span><?= $value["god_avto"];?>.г</span>
          <span><?= number_format( $value["probeg"], 0, ',', ' ' );?> км</span>
          <span><?= $value["cuzov"];?></span>
      </div>
      <div class="cont-car-block block-row">
          <span><?= $value["korobka"];?></span>
          <span>г.<?= $value["cite_prod"];?></span>
      </div>
      <div class="but-car-block block-row">
        <div class="icon-result">
          <div class="repost-ico"></div>
          <div class="repost-ico-result"></div>
        </div>
        <div class="icon-result">
          <div class="bookmarks-ico"></div>
          <div class="repost-ico-result"></div>
        </div>
          <a href="/cars/avto/<?= $value["mark"];?>/<?= $value["model"];?>/car-<?= $value["id_post"];?>" class="but-a">Подробно</a>
      </div>
    </div>
  </div>
</div>
<!-- end carpost -->
<?php endif;?>
<?php endforeach;?>
<!-- start post -->
<div class="conteiner-block-post box-block">
  <div class="heder-post">
    <div class="avatar-post">
      <img src="assets/images/my.jpg" alt="">
      <a href="#">Вячеслав</a>
    </div>
    <div class="date-post">20.06.2018</div>
    <div class="icon-heder-post"></div>
  </div>
  <div class="content-post">
    <div class="text-post">
      <div class="text-content">
        Эксперимент с запуском удался. Технология позволяет нам закрывать всё больше и
        больше задач, уже сегодня реализованы подключения заправки и ёмкостей хранения
        топлива, счётчиков воды и т.д.»
      </div>
      <div class="image-content">
        <img src="assets/images/001.jpg" alt="">
      </div>
    </div>
    <div class="but-post"></div>
    <div class="coment-post"></div>
  </div>
</div>
<!-- end post -->
 </div>
 <!--  left menu-->
 <?php  include ROOT . '/core/views/bazes/menu-left.php'; ?>

 </div>

 <?php  include ROOT . '/core/views/bazes/footer.php'; ?>
