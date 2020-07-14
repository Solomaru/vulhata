<?php
print_r($_SESSION);
//include ROOT . '/core/views/bazes/header.php';
$a['title']= 'Vulavto социальная сеть автовладельцев';
$a['description']='Добавление услуги на сайт';
$a['js'][0] = 'id-cars.js';
Lyamb::head($a);
 ?>

 <div class="kupi-conteiner-row">

    <!--  left menu-->
    <?php  include ROOT . '/core/views/bazes/block-vip.php'; ?>

 <div class="main-lenta">
<div class="vidg-kroshki block-row box-block">
  <!-- <span><a href=""></a></span> -->
 <span class="title-id-car"><?= $result["mark"] . ' '. $result['model'];?>, <?= $result['cuzov']; ?> </span>
  <span class="header-price-id"><?= number_format( $result["price"], 0, ',', ' ' );?> <i class="fas fa-ruble-sign"></i></span>
</div>

<div class="content-car block-column box-block">
  <div class="heder-post">
    <div class="avatar-post">
      <img src="/data/users/<?=$result["id_user"];?>/img/<?=$result["url_img"];?>" alt="">
      <a href="/<?=$result["login"];?>"><?=$result["login"];?></a>
    </div>
    <div class="date-post"><?=$result["data_cars"];?></div>

    <div class="icon-heder-post"></div>
  </div>
  <span class="span-title-idcar">Место просмотра машины</span>
  <div class="mesto-prod block-row">
    <div class="block-cent block-column">
      <div class="mesto-cite">г.<?=$result["cite_prod"];?></div>
      <div class="mesto-ul">ул.Пионерская</div>
    </div>
    <div class="block-cent block-column">
      <div class="telefon-car">+7 926 557 71 07</div>
      <div class="time-car">c 9:00 до 21:00</div>
    </div>


  </div>
<span class="span-title-idcar">Характеристики</span>
  <div class="harakteristik block-row">
    <div class="harone">
      <div class="item block-row">
        <div class="title-har">Год выпуска</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result["god_avto"];?>.г</div>
      </div>
      <div class="item block-row">
        <div class="title-har">Пробег</div>
        <div class="hr"></div>
        <div class="value-har"><?= number_format( $result["probeg"], 0, ',', ' ' );?> км</div>
      </div>
      <div class="item block-row">
        <div class="title-har">Двигатель</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result["dvigatel"];?> / <?= $result["obem_lit"];?> л</div>
      </div>
      <div class="item block-row">
        <div class="title-har">Кузов</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result['cuzov'] .' '. $result['count_dver']; ?>дв</div>
      </div>
      <div class="item block-row">
        <div class="title-har">КПП</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result["korobka"];?></div>
      </div>
    </div>
    <div class="hartoo">
      <div class="item block-row">
        <div class="title-har">Цвет</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result["color"];?></div>
      </div>
      <div class="item block-row">
        <div class="title-har">Руль</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result["rudder"];?></div>
      </div>
      <div class="item block-row">
        <div class="title-har">Привод</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result["privod"];?></div>
      </div>
      <div class="item block-row">
        <div class="title-har">Мощность</div>
        <div class="hr"></div>
        <div class="value-har"><?= $result['mosh_dvig'];?> л.с</div>
      </div>

    </div>

  </div>


    <div class="cont-images block-column">
        <div class="big-imagi">
          <img src="/data/users/6/img/avto.jpg" alt="">
        </div>
        <div class="cont-mini-imagi block-row">
          <img src="/data/users/6/img/avto.jpg" alt="">
          <img src="/data/users/6/img/avto.jpg" alt="">
          <img src="/data/users/6/img/avto.jpg" alt="">
          <img src="/data/users/6/img/avto.jpg" alt="">
          <img src="/data/users/6/img/avto.jpg" alt="">
          <img src="/data/users/6/img/avto.jpg" alt="">
        </div>
    </div>

    <div class="opisnie-car">
        <span class="span-title-idcar">Описание владельца</span>
        <div class="text-vladel">
          <?= $result["opis_cars"];?>
        </div>

    </div>



<!--  -->
    <span class="span-title-idcar">Комплектация</span>
    <div id="blockUpDown" class="cont-class-block">
      <div class="komplektaciya">



          <span class="komp-span">Комфорт</span>
          <ul>
            <?php if($result["id_el_st"] != 0):?>
              <div class="block-row">
                <li>Электрические стеклоподъемники</li>
                <li><?= $result["name_el_st"];?></li>
              </div>
            <?php endif;?>
            <?php if($result["id_klim_kon"] != 0):?>
              <div class="block-row">
                <li>Климат-контроль</li>
                <li><?= $result["klim_name"];?></li>
              </div>
            <?php endif;?>
            <?php if($result["id_ob_si"] != 0):?>
              <div class="block-row">
                <li>Обогрев сидений</li>
                <li><?= $result["name_obog_sid"];?></li>
              </div>
            <?php endif;?>
            <?php if($result["id_reg_rul"] != 0):?>
              <div class="block-row">
                <li>Регулировка руля</li>
                <li><?= $result["name_reg_rul"];?></li>
              </div>
            <?php endif;?>
            <?php if($result["id_us_rul"] != 0):?>
              <div class="block-row">
                <li>Усилитель руля</li>
                <li><?= $result["name_us_rul"];?></li>
              </div>
            <?php endif;?>
            <?php if($result["kondicioner"] != 'null'):?>
               <li><?= $result["kondicioner"];?></li>
            <?php endif;?>
            <?php if($result["tonirovka_stekla"] != 'null'):?>
               <li><?= $result["tonirovka_stekla"];?></li>
            <?php endif;?>
            <?php if($result["kamera_zadnego_vida"] != 'null'):?>
               <li><?= $result["kamera_zadnego_vida"];?></li>
            <?php endif;?>

            <?php if($result["parktronik_zad"] != 'null'):?>
               <li><?= $result["parktronik_zad"];?></li>
            <?php endif;?>
            <?php if($result["parktronik_pered"] != 'null'):?>
               <li><?= $result["parktronik_pered"];?></li>
            <?php endif;?>
            <?php if($result["zapusk_dvig_but"] != 'null'):?>
               <li><?= $result["zapusk_dvig_but"];?></li>
            <?php endif;?>
            <?php if($result["kruiz_kontrol"] != 'null'):?>
               <li><?= $result["kruiz_kontrol"];?></li>
            <?php endif;?>
          </ul>
          <!--end komfort  -->

          <span class="komp-span">Безопасность</span>
          <ul>
            <?php if($result["abs"] != 'null'):?>
               <li><?= $result["abs"];?></li>
            <?php endif;?>
            <?php if($result["esp"] != 'null'):?>
                <li><?= $result["esp"];?></li>
            <?php endif;?>
            <?php if($result["antiprobuks_sistem"] != 'null'):?>
                <li><?= $result["antiprobuks_sistem"];?></li>
            <?php endif;?>
            <?php if($result["sistema_noch_vid"] != 'null'):?>
                <li><?= $result["sistema_noch_vid"];?></li>
            <?php endif;?>

            <?php if($result["podushka_bez_vod"] != 'null'):?>
                <li><?= $result["podushka_bez_vod"];?></li>
            <?php endif;?>
            <?php if($result["podushka_bez_pas"] != 'null'):?>
                <li><?= $result["podushka_bez_pas"];?></li>
            <?php endif;?>
            <?php if($result["podushka_bez_bok"] != 'null'):?>
                <li><?= $result["podushka_bez_bok"];?></li>
            <?php endif;?>
            <?php if($result["podushka_bez_bok_zad"] != 'null'):?>
                <li><?= $result["podushka_bez_bok_zad"];?></li>
            <?php endif;?>
          </ul>
          <!-- edn bezopasnost -->
          <span class="komp-span">Элементы экстерьера</span>
          <ul>
            <?php if($result["za_kartera"] != 'null'):?>
                <li><?= $result["za_kartera"];?></li>
            <?php endif;?>
            <?php if($result["pnevmopodveska"] != 'null'):?>
                <li><?= $result["pnevmopodveska"];?></li>
            <?php endif;?>
            <?php if($result["legko_diski"] != 'null'):?>
               <li><?= $result["legko_diski"];?></li>
            <?php endif;?>

            <?php if($result["zim_shini"] != 'null'):?>
               <li><?= $result["zim_shini"];?></li>
            <?php endif;?>

            <?php if($result["farcop"] != 'null'):?>
               <li><?= $result["farcop"];?></li>
            <?php endif;?>

          </ul>
          <span class="komp-span">Салон и интерьер</span>
          <ul>
            <?php if($result["id_ob_sal"] != 0):?>
            <div class="block-row">
              <li>Обивка салона</li>
              <li><?= $result["name_obiv_sal"];?></li>
            </div>
            <?php endif;?>
            <?php if($result["count-mest"] != 0):?>
            <div class="block-row">
              <li>Количество мест</li>
              <li><?= $result["count-mest"];?></li>
            </div>
            <?php endif;?>

            <?php if($result["panoram_krish"] != 'null'):?>
               <li><?= $result["panoram_krish"];?></li>
            <?php endif;?>
            <?php if($result["luk"] != 'null'):?>
               <li><?= $result["luk"];?></li>
            <?php endif;?>
            <?php if($result["koja_rul"] != 'null'):?>
               <li><?= $result["koja_rul"];?></li>
            <?php endif;?>
            <?php if($result["svet_salon"] != 'null'):?>
               <li><?= $result["svet_salon"];?></li>
            <?php endif;?>
            <?php if($result["temn_salon"] != 'null'):?>
               <li><?= $result["temn_salon"];?></li>
            <?php endif;?>
          </ul>
          <!--end salon i interer -->
          <span class="komp-span">Обзор</span>
          <ul>

            <?php if($result["id_fari"] != 0):?>
              <div class="block-row">
                <li>Фары</li>
                <li><?= $result["name_fari"];?></li>
              </div>
            <?php endif;?>

            <?php if($result["prot_fari"] != 'null'):?>
                <li><?= $result["prot_fari"];?></li>
            <?php endif;?>
            <?php if($result["omiv-far"] != 'null'):?>
                <li><?= $result["omiv-far"];?></li>
            <?php endif;?>
            <?php if($result["elek_zerk"] != 'null'):?>
                <li><?= $result["elek_zerk"];?></li>
            <?php endif;?>
            <?php if($result["datchik_dojdya"] != 'null'):?>
                <li><?= $result["datchik_dojdya"];?></li>
            <?php endif;?>
            <?php if($result["datchik_sveta"] != 'null'):?>
                <li><?= $result["datchik_sveta"];?></li>
            <?php endif;?>
            <?php if($result["obogrev_zerkal"] != 'null'):?>
                <li><?= $result["obogrev_zerkal"];?></li>
            <?php endif;?>


          </ul>
      </div>
      <!--  -->
      <!-- end  cont-class-block -->
    </div>
    <button type="button" class="but-up-down">Посмотреть всю комплектацию</button>

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
<!--end car-cont  -->
</div>






   <!-- end item-avto-block-->
 </div>
 <!--right menu  -->
 <?php  include ROOT . '/core/views/bazes/menu-left.php'; ?>
 </div>

 <?php  include ROOT . '/core/views/bazes/footer.php'; ?>
