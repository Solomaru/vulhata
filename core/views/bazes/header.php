<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <script src="https://kit.fontawesome.com/bd0fcadbdd.js" crossorigin="anonymous"></script>
 
  <script src="https://api-maps.yandex.ru/2.1/?apikey=687afa96-ae7b-4aa4-8f31-d4a25b4858f5&lang=ru_RU" type="text/javascript">
    </script>

 <!-- <script src="/assets/js/libs/Inputmask5/dist/jquery.inputmask.js" type="text/javascript"></script>
 <script src = "/assets/js/libs/Inputmask5/dist/inputmask.js " ></script> -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>



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
          <a href="/rent/add"><ion-icon name="add"></ion-icon>Разместить объявление
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
