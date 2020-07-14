<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/feed-style.css">
  <link rel="stylesheet" href="/assets/css/formstyle.css">
  <link rel="stylesheet" href="/assets/css/iconstyle.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->

  <script src="/assets/js/main-reg.js"></script>
  <script src="/assets/js/main.js"></script>

  <?php if($meta['js']):?>
     <?php foreach ($meta['js'] as $key): ?>
       <script src="/assets/js/<?= $key ?>"></script>
     <?php endforeach;?>
   <?php endif;?>
  <title><?= $meta['title'] ?></title>
</head>
<body>
  <div class="main-conteiner">
    <div class="main-avto-heder">
      <div class="main-logo">
        <a href="/"><img src="/assets/images/logova.png" alt=""></div></a>

<?php if( Lyamb::dostup()):?>
      <span><i class="far fa-bell"></i></span>
      <span><i class="far fa-envelope"></i></span>
<?php endif;?>
      <div class="main-menu">
        <div class="main-kupi-prodai">
        <a href="/cars">Объявления</a>
          <a href="/cars/addcars"><ion-icon name="add"></ion-icon>Разместить объявление
</a>
        </div>
        <?php if(!Lyamb::dostup()):?>
        <div class="vhod-top-lic" >
          <span><i class="far fa-user"></i><a id="popup-open" class="popup-open">Личный кабинет</a></span>
        </div>
      <?php else:?>
        <div id="topProfMenu" class="profil-menu-foto">
              <span class="span-foto-top">
                  <a class="menu-foto-top" href="#"><img src="/assets/images/my.jpg" alt=""> <span>▼</span>
                </a>
              </span>
              <div id="UserTopMinu" class="minuUserTop">
                  <a href="">Редактировать</a>
                  <a href="">Настройки</a>
                  <a href="">Помощь</a>
                  <hr>
                  <a href="/user/logaut">Выйти</a>
              </div>
        </div>
<?php endif;?>
      </div>
    </div>
