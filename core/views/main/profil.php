<?php
$a['title']= 'Профиль пользователя';
$a['description']='Профиль ';
$a['js'][0] = 'profil.js';
Lyamb::head($a);
?>
<!-- start pofil   -->
<div class="profil-conteiner">
 <div class="profil-cont box-block">


   <div class="profil-top-block">

     <div class="profil-menu-avto">
       <!-- <div class="profil-menu">
         <ul>
           <span><li><i class="far fa-user"></i><a href="/<?= $_SESSION['users']['login']?>">Профиль</a></li></span>
           <span><li><i class="far fa-user"></i><a href="/feed">Лента</a></li></span>
           <span><li><i class="far fa-user"></i><a href="">Клубы</a></li></span>
           <span><li><i class="far fa-user"></i><a href="">Друзья</a></li></span>
           <span><li><i class="far fa-user"></i><a href="/user">Продать</a></li></span>
           <span><li><i class="far fa-user"></i><a href="">Фото</a></li></span>
         </ul>
       </div> -->
       <!--  left menu-->
       <?php  include ROOT . '/core/views/bazes/menu-left.php'; ?>

       <div class="profil-hor-avto">
         <div class="profil-status">У меняч все хорошо</div>
         <div class="profil-tab-haracter">

           <div id="tab-div">
               <div class="tab-menu">
                       <div class="tab">Авто</div>
                       <div class="tab">Обо мне</div>
                       <div class="tab">Связь</div>
               </div>

             <div class="tabcontent">111111111111111111111</div>
             <div class="tabcontent">222222222222222222222</div>
             <div class="tabcontent">33333333333333333333</div>
           </div>
         </div>
         <div class="profil-img-avto">
           <h3>Ласточка моя лачти</h3>
           <p><span>Категория: <b>B</b></span> <span>Стаж: <b>8 лет</b></span><span>ДТП: <b>0</b></span></p>
           <img src="assets/images/mayalach.jpg" alt="">
         </div>
       </div>
     </div>
<!--  -->
     <div class="profil-user-baner">
       <!-- <div class="baner-frofil">
         <h3>Объявления</h3>

         <div class="item-obyava">
           <img src="assets/images/mayalach.jpg" alt="">
           <div class="item-obyava-opis">
                 <h4>Chevrole Lacetti</h4>
                 <p>2014 года</p>
                 <span>25 350 000 <i class="fas fa-ruble-sign"></i></span>
           </div>
         </div>

         <div class="item-obyava">
           <img src="assets/images/mayalach.jpg" alt="">
           <div class="item-obyava-opis">
                 <h4>Chevrole Lacetti</h4>
                 <p>2014 года</p>
                 <span>25 350 000 <i class="fas fa-ruble-sign"></i></span>
           </div>
         </div>

         <div class="item-obyava">
           <img src="assets/images/mayalach.jpg" alt="">
           <div class="item-obyava-opis">
                 <h4>Chevrole Lacetti</h4>
                 <p>2014 года</p>
                 <span>25 350 000 <i class="fas fa-ruble-sign"></i></span>
           </div>
         </div>

         <div class="item-obyava">
           <img src="assets/images/mayalach.jpg" alt="">
           <div class="item-obyava-opis">
                 <h4>Chevrole Lacetti</h4>
                 <p>2014 года</p>
                 <span>25 350 000 <i class="fas fa-ruble-sign"></i></span>
           </div>
         </div>

       </div> -->
       <!--  -->
       <div class="user-profil">
         <h4>Соломатин Вячеслав</h4>
         <p>Москва,Россия 24 года</p>
         <img src="assets/images/my.jpg" alt="">
         <a href="">Редактировать</a>
         <div class="user-podarok">
           <span>Подароки</span>
           <img src="assets/images/mayalach.jpg" alt="">
         </div>
       </div>
        <!--  -->
        <div class="baner-frofil-mini">
          <h3>Объявления</h3>
          <div class="item-obyava-profil block-row">
            <img src="assets/images/mayalach.jpg" alt="">
            <div class="item-obyava-opis-profil block-column">
              <a href="#">Chevrole Lacetti</a>
                  <p>2014 года</p>
             <span>350 000 <i class="fas fa-ruble-sign"></i></span>
            </div>
          </div>
          <div class="item-obyava-profil block-row">
            <img src="assets/images/mayalach.jpg" alt="">
            <div class="item-obyava-opis-profil block-column">
              <a href="#">Chevrole Lacetti</a>
                  <p>2014 года</p>
             <span>350 000 <i class="fas fa-ruble-sign"></i></span>
            </div>
          </div>
          <div class="item-obyava-profil block-row">
            <img src="assets/images/mayalach.jpg" alt="">
            <div class="item-obyava-opis-profil block-column">
              <a href="#">Chevrole Lacetti</a>
                  <p>2014 года</p>
             <span>350 000 <i class="fas fa-ruble-sign"></i></span>
            </div>
          </div>
          <div class="item-obyava-profil block-row">
            <img src="assets/images/mayalach.jpg" alt="">
            <div class="item-obyava-opis-profil block-column">
              <a href="#">Chevrole Lacetti</a>
                  <p>2014 года</p>
             <span>350 000 <i class="fas fa-ruble-sign"></i></span>
            </div>
          </div>
          <div class="item-obyava-profil block-row">
            <img src="assets/images/mayalach.jpg" alt="">
            <div class="item-obyava-opis-profil block-column">
              <a href="#">Chevrole Lacetti</a>
                  <p>2014 года</p>
             <span>350 000 <i class="fas fa-ruble-sign"></i></span>
            </div>
          </div>

        </div>
     </div>
<!--  -->
   </div>

 </div>
<div class="row-foto-stat box-block">
  <div class="prof-frend">
    <a href="#">Мои друзья</a>

<div class="block-frends">

  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#">Вася</a>
  </div>
  <!--  -->
  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#">Пупкин</a>
  </div>
  <!--  -->
  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#">Вася</a>
  </div>
  <!--  -->
  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#"> Пупкин</a>
  </div>
  <!--  -->
  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#">Антон</a>
  </div>
  <!--  -->
  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#"> Пупкин</a>
  </div>
  <!--  -->
  <div class="frend-block">
    <img src="assets/images/my.jpg" alt="">
    <a href="#"> Пупкин</a>
  </div>


</div>

</div>

  <div class="prof-stat">

<div class="stat-user">
  <span class="stat-result"> 100 </span>
  <span> друзей</span>
</div>

<div class="stat-user">
  <span class="stat-result"> 50 </span>
  <span> фотографий</span>
</div>

<div class="stat-user">
  <span class="stat-result"> 2 </span>
  <span> объявлений</span>
</div>

  </div>
</div>
      <!-- end top profil  -->

      <div class="row-lenta-foto">
        <div class="profil-lenta">
          <div class="divRedactor">
            <div class="pisaninka"></div>
            <div class="nagimalka">
              <div class="but-icon">
                <i class="far fa-user"></i>
                <i class="far fa-user"></i>
                <i class="far fa-user"></i>
                <i class="far fa-user"></i>
              </div>
              <div class="but-knop">
                <a href="#">Отправить</a>
              </div>
            </div>
          </div>
        </div>
        <div class="profil-block-profilya">
          <div class="myfoto-block box-block">
          <a href="#">Мои фото</a>
          </div>
          <div class="mygrups-block box-block">
            <a href="#">Группы</a>
          </div>
        </div>
      </div>


</div>
<!-- end profil -->
<?php  include ROOT . '/core/views/bazes/footer.php'; ?>
