<?php
//print_r($_SESSION);
//include ROOT . '/core/views/bazes/header.php';
$a['title']= 'Vulavto социальная сеть автовладельцев';
$a['description']='Добавление услуги на сайт';
$a['js'][0] = 'main-cars.js';
Lyamb::head($a);
// echo "<pre>";
//   var_dump($_GET);
// echo "</pre>";
 ?>

 <div class="kupi-conteiner-row">

   <!--  left menu-->
   <?php  include ROOT . '/core/views/bazes/block-vip.php'; ?>
 <div class="main-lenta">

<div class="foma-poisk-cars box-block">
<!-- start main form select -->
  <div class="main-form-select block-row">

        <div class="item-select">
            <div class="item-select-marka">
              <div class="item-marka" data-marka-id="">
                <button type="button"  class="but-marka-filter" name="button">Выбрать марку</button>
              </div>
              <div id="markaDiv" class="option-marka">
                <div class="butMarkFilt classAf aktiv-marka"  data-clear ="true">Выбрать марку</div>
                    <hr>
                <?php foreach ($marka as $key => $value):?>
                    <div class="butMarkFilt" data-markaid ="<?=$value['id']?>"><?=$value['mark']?></div>
                <?php endforeach;?>
              </div>
            </div>
        </div>
        <div class="item-select">
            <div class="item-select-model">
              <div class="item-marka" data-marka-id="">
                <button type="button" class="but-model-filter" name="button" >Выбрать модель</button>
              </div>
              <div id="modelDiv" class="option-model">
                <div class="butModelFilt classAf aktiv-model"  data-clear ="true">Выбрать модель</div>
                    <hr>
              </div>
            </div>
        </div>
        <div class="item-select">
            <div class="item-select-marka">
              <div class="item-marka" data-marka-id="">
                <button type="button"  class="but-cuzov-filter" name="button">Выбрать кузов</button>
              </div>
              <div id="cuzovDiv" class="option-marka">
                <div class="butCuzovFilt classAf aktiv-cuzov"  data-clear ="true">Выбрать кузов</div>
                    <hr>
                    <?php foreach ($cuzov as $key => $value):?>
                        <div class="butCuzovFilt" data-cuzovid ="<?=$value['id']?>"><?=$value['rusish']?></div>
                    <?php endforeach;?>
              </div>
            </div>
        </div>
<!-- end main form select -->
</div>
  <div class="main-form-select block-row">
    <div class="price-input-div ">
      <div class="block-row">
        <span >
          <input  class="input-from-price" name="" value="" placeholder="Цена от, руб.">
        </span>
        <span>
          <input  class="input-to-price" name="" value="" placeholder="до">
        </span>
      </div>
      </div>

    <div class="probeg-input-div ">
      <div class="block-row">
        <span>
          <input type="tel" class="input-from-probeg" name="" value="" placeholder="Пробег, от">
        </span>
        <span>
          <input  class="input-to-probeg" name="tel" value="" placeholder="до">
        </span>
      </div>

    </div>

   <!-- end main form select -->
   </div>




   <!-- start main form select -->
     <div class="main-form-select block-row">

           <div class="item-select">
               <div class="item-select-k">
                 <div class="item-kpp" data-kpp-id="">
                   <button type="button"  class="but-kpp-filter" name="button">КПП</button>
                 </div>
                 <div id="kppDiv" class="option-marka">
                   <div class="butKppFilt classAf aktiv-kpp"  data-clear ="true">КПП</div>
                       <hr>
                   <?php foreach ($kpp as $key => $value):?>
                       <div class="butKppFilt" data-kppid ="<?=$value['id']?>"><?=$value['rusish']?></div>
                   <?php endforeach;?>
                 </div>
               </div>
           </div>
           <div class="item-select">
               <div class="item-select-k">
                 <div class="item-marka" data-marka-id="">
                   <button type="button" class="but-dvig-filter" name="button">Двигатель</button>
                 </div>
                 <div id="dvigDiv" class="option-model">
                   <div class="butDvigFilt classAf aktiv-dvig"  data-clear ="true">Двигатель</div>
                       <hr>
                       <?php foreach ($dvig as $key => $value):?>
                           <div class="butDvigFilt" data-dvigid ="<?=$value['id']?>"><?=$value['rusish']?></div>
                       <?php endforeach;?>
                 </div>
               </div>
           </div>
           <div class="item-select">
               <div class="item-select-k">
                 <div class="item-marka" data-priv-id="">
                   <button type="button"  class="but-priv-filter" name="button">Привод</button>
                 </div>
                 <div id="privDiv" class="option-marka">
                   <div class="butPrivFilt classAf aktiv-priv"  data-clear ="true">Привод</div>
                       <hr>
                       <?php foreach ($priv as $key => $value):?>
                           <div class="butPrivFilt" data-privodid ="<?=$value['id']?>"><?=$value['rusish']?></div>
                       <?php endforeach;?>
                 </div>
               </div>
           </div>
   <!-- end main form select -->


   <div class="probeg-input-div ">
     <div class="block-row">
       <span>
         <button type="button" class="but-god-from-filter" name="button">Год, от</button>
       </span>
       <div id="godfromDiv" class="option-marka">
         <div class="butGodFromFilt classAf aktiv-godfrom"  data-clear ="true">Год, от</div>
             <hr>
             <?php for($i = 1940; $i <= 2018; $i++):?>
                 <div class="butGodFromFilt" data-god-from ="<?=$i;?>"><?= $i;?></div>
             <?php endfor;?>
       </div>
       <span>
         <button type="button" class="but-god-to-filter" name="">до</button>
       </span>
       <div id="godtoDiv" class="option-marka">
         <div class="butGodToFilt classAf aktiv-godto"  data-clear ="true">до</div>
             <hr>
             <?php for($i = 2018; $i >= 1940; $i--):?>
                 <div class="butGodToFilt" data-god-to ="<?=$i;?>"><?= $i;?></div>
             <?php endfor;?>
       </div>
     </div>

   </div>

</div>


  <div class="main-form-poisk-ob">
    <div class="div-chech-main">
        <!-- <span>С фото</span><input class="check" type="checkbox" name="s_image" value=""> -->
    </div>
   <button type="button" id="but-save-filtr" name="button">Показать объявления</button>
  </div>


  <!--end forma-poisk  -->
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
 <!--  -->
 <!--  left menu-->
 <?php  include ROOT . '/core/views/bazes/menu-left.php'; ?>
 </div>

 <?php  include ROOT . '/core/views/bazes/footer.php'; ?>
