<?php
print_r($_SESSION);
//include ROOT . '/core/views/bazes/header.php';
$a['title']= 'Vulavto социальная сеть автовладельцев';
$a['description']='Добавление услуги на сайт';
//$a['js'][0] = 'main.js';
Lyamb::head($a);
 ?>

 <div class="kupi-conteiner-row">
   <!--  left menu-->
   <?php  include ROOT . '/core/views/bazes/menu-left.php'; ?>
 <div class="main-lenta">
   <div class="vidg-kroshki block-row box-block">
     <span><a href=""></a></span>
     <span><?= $result[0]["mark"] . ' '. $result[0]['model']?></span>
   </div>
<?php foreach ($result as $key => $value):?>
<?php
$image = Handler::selectImg($value['id_post']);
$img = Handler::delUrl($image);
?>
   <!--  -->
   <div class="item-avto-block box-block" >

     <div class="heder-post">
       <div class="avatar-post">
         <img src="/data/users/<?=$value["id_user"];?>/img/<?=$value["url_img"];?>" alt="">
         <a href="/<?=$value["login"];?>"><?=$value["login"];?></a>
       </div>
       <div class="date-post"><?=$value["data_cars"];?></div>
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
   <!--  -->
<?php endforeach;?>

   <!-- end item-avto-block-->
 </div>
 <div class="kupi-menu-right">
   <div class="kupi-menu-block"></div>
   <div class="baner-frofil">
     <h3>Объявления</h3>

     <div class="item-obyava">
       <span>Chevrole Lacetti 2014 года</span>
       <img src="assets/images/mayalach.jpg" alt="">
       <div class="item-obyava-opis">
          <span>350 000 <i class="fas fa-ruble-sign"></i></span>
       </div>
     </div>

     <div class="item-obyava">
       <span>Chevrole Lacetti 2014 года</span>
       <img src="assets/images/mayalach.jpg" alt="">
       <div class="item-obyava-opis">
          <span>350 000 <i class="fas fa-ruble-sign"></i></span>
       </div>
     </div>

     <div class="item-obyava">
       <span>Chevrole Lacetti 2014 года</span>
       <img src="assets/images/mayalach.jpg" alt="">
       <div class="item-obyava-opis">
          <span>350 000 <i class="fas fa-ruble-sign"></i></span>
       </div>
     </div>

     <div class="item-obyava">
       <span>Chevrole Lacetti 2014 года</span>
       <img src="assets/images/mayalach.jpg" alt="">
       <div class="item-obyava-opis">
          <span>350 000 <i class="fas fa-ruble-sign"></i></span>
       </div>
     </div>

   </div>

 </div>
 </div>

 <?php  include ROOT . '/core/views/bazes/footer.php'; ?>
