
<?php
$a['title']= 'Vulavto социальная сеть автовладельцев';
$a['description']='Добавление услуги на сайт';
$a['js'][0] = 'addcars.js';
Lyamb::head($a);
// echo "<pre>";
// var_dump($marka);
// echo "</pre>";

 ?>


 <div class="kupi-conteiner-row">
 <div class="main-lenta-addcars">
<div class="conteiner-addcars box-block">
  <div id="section-marka-cars" class="section-addcars">
    <h3>Выберите марку авто</h3>
    <ul>
         <?php foreach ($marka as $key => $value):?>
             <li><button class="butMark" data-markaid ="<?=$value['id']?>"><?=$value['mark']?></button></li>
         <?php endforeach;?>
      </ul>
  </div>
  <div id="section-model-cars" class="section-addcars">
    <h3>Выберите модель авто</h3>
    <ul class="model-cars"></ul>
  </div>
  <div id="section-harak-cars" class="section-addcars">
    <h3>Заполните все данные</h3>
    <ul class="harak-cars block-row">
      <li><p>Год выпуска<i>*</i></p><input type="number" name="god_vipuska" value=""></li>
      <li><p>Пробег<i>*</i></p><input type="number" name="probeg" value=""></li>
      <li><p>Объем<i>*</i></p><input type="number" name="volume" value=""> <span> л</span></li>
      <li><p>Мощность двигателя<i>*</i></p><input type="number" name="moshnost_dvigatelya" value=""><span> л.с</span></li>
    </ul>


    <ul class="kuzov-block">
      <p>Кузов<i>*</i></p>
      <span class="kuzov-cars block-row">
        <li><button type="button" data-target="cuzov" data-cuzov-id= "1" class="but-addavto but-kuzov">Внедорожник</button></li>
        <li><button type="button" data-cuzov-id= "2" class="but-addavto but-kuzov">Лимузин</button></li>
        <li><button type="button" data-cuzov-id= "3" class="but-addavto but-kuzov">Купе</button></li>
        <li><button type="button" data-cuzov-id= "4" class="but-addavto but-kuzov">Кабриолет</button></li>
        <li><button type="button" data-cuzov-id= "5" class="but-addavto but-kuzov">Кроссовер</button></li>
        <li><button type="button" data-cuzov-id= "6" class="but-addavto but-kuzov">Минивэн</button></li>
        <li><button type="button" data-cuzov-id= "7" class="but-addavto but-kuzov">Пикап</button></li>
        <li><button type="button" data-cuzov-id= "8" class="but-addavto but-kuzov">Седан</button></li>
        <li><button type="button" data-cuzov-id= "9" class="but-addavto but-kuzov">Хетчбэк</button></li>
        <li><button type="button" data-cuzov-id= "10" class="but-addavto but-kuzov">Универсал</button></li>
      </span>
    </ul>

    <ul class="kuzov-block block-row">
      <div class="block-nowrow">
        <p>Количество дверей<i>*</i></p>
        <span class="kuzov-cars block-row">
          <li><button type="button" data-dver="1" class="but-addavto but-dver-count">1</button></li>
          <li><button type="button" data-dver="2" class="but-addavto but-dver-count">2</button></li>
          <li><button type="button" data-dver="3" class="but-addavto but-dver-count">3</button></li>
          <li><button type="button" data-dver="4" class="but-addavto but-dver-count">4</button></li>
          <li><button type="button" data-dver="5" class="but-addavto but-dver-count">5</button></li>
        </span>
      </div>
      <div class="block-nowrow">
        <p>Коробка передач<i>*</i></p>
        <span class="kuzov-cars block-row">
          <li><button type="button" data-korobka-peredac-id="1" class="but-addavto but-korobka-peredac">Механика</button></li>
          <li><button type="button" data-korobka-peredac-id="2" class="but-addavto but-korobka-peredac">Автомат</button></li>
          <li><button type="button" data-korobka-peredac-id="3" class="but-addavto but-korobka-peredac">Вариатор</button></li>
          <li><button type="button" data-korobka-peredac-id="4" class="but-addavto but-korobka-peredac">Робот</button></li>
        </span>
      </div>
    </ul>

    <ul class="kuzov-block">
      <p>Привод<i>*</i></p>
      <span class="kuzov-cars block-row">
        <li><button type="button" data-privod-id="1" class="but-addavto but-privod">Передний</button></li>
        <li><button type="button" data-privod-id="2" class="but-addavto but-privod">Полный</button></li>
        <li><button type="button" data-privod-id="3" class="but-addavto but-privod">Полный подключаемый</button></li>
        <li><button type="button" data-privod-id="4" class="but-addavto but-privod">Задний</button></li>
      </span>
    </ul>

    <ul class="kuzov-block block-row">
      <div class="block-nowrow">
        <p>Руль<i>*</i></p>
        <span class="kuzov-cars block-row">
          <li><button type="button" data-rul="Левый" class="but-addavto but-rul">Левый</button></li>
          <li><button type="button" data-rul="Правый" class="but-addavto but-rul">Правый</button></li>
        </span>
      </div>
      <div class="block-nowrow">
        <p>Двигатель<i>*</i></p>
        <span class="kuzov-cars block-row">
          <li><button type="button" data-dvigatel-id="1" class="but-addavto but-dvigatel">Бензин</button></li>
          <li><button type="button" data-dvigatel-id="2" class="but-addavto but-dvigatel">Дизель</button></li>
          <li><button type="button" data-dvigatel-id="3" class="but-addavto but-dvigatel">Газ</button></li>
          <li><button type="button" data-dvigatel-id="4" class="but-addavto but-dvigatel">Электро</button></li>
          <li><button type="button" data-dvigatel-id="5" class="but-addavto but-dvigatel">Гибрид</button></li>
        </span>
      </div>
    </ul>

    <div class="butnext block-row">
      <a href="#" id="butLeftCars" class="but-a">Назад</a>
        <a href="#" id="butRightCars" class="but-a">Дальше</a>
    </div>

  </div>

  <div id="section-vid-cars" class="section-addcars">
      <h3>Заполните внешний вид машины</h3>

      <div class="cont-color-cars">
          <span class="title-color">Выберите наиболее близкий цвет автомобиля</span>
          <div class="add-color-cars block-row">
              <div class="color-cars">
                  <input type="radio" id="black" name="color-cars" value="1">
                  <label for="black" class="lable-checkbox-color" style="background-color:black;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="gray" name="color-cars" value="2">
                  <label for="gray" class="lable-checkbox-color" style="background-color:gray;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="silver" name="color-cars" value="3">
                  <label for="silver" class="lable-checkbox-color" style="background-color:silver;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="white" name="color-cars" value="4">
                  <label for="white" class="lable-checkbox-color" style="background-color:white;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="beige" name="color-cars" value="5">
                  <label for="beige" class="lable-checkbox-color" style="background-color:beige;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="lightblue" name="color-cars" value="6">
                  <label for="lightblue" class="lable-checkbox-color" style="background-color:lightblue;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="blue" name="color-cars" value="7">
                  <label for="blue" class="lable-checkbox-color" style="background-color:blue;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="red" name="color-cars" value="8">
                  <label for="red" class="lable-checkbox-color" style="background-color:red;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="yellow" name="color-cars" value="9">
                  <label for="yellow" class="lable-checkbox-color" style="background-color:yellow;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="brown" name="color-cars" value="10">
                  <label for="brown" class="lable-checkbox-color" style="background-color:brown;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="green" name="color-cars" value="11">
                  <label for="green" class="lable-checkbox-color" style="background-color:green;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="gold" name="color-cars" value="12">
                  <label for="gold" class="lable-checkbox-color" style="background-color:gold;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="pink" name="color-cars" value="13">
                  <label for="pink" class="lable-checkbox-color" style="background-color:pink;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="violet" name="color-cars" value="14">
                  <label for="violet" class="lable-checkbox-color" style="background-color:violet;"></label>
              <span class="label"></span>
              </div>
              <div class="color-cars">
                  <input type="radio" id="purple" name="color-cars" value="15">
                  <label for="purple" class="lable-checkbox-color" style="background-color:purple;"></label>
              </div>
              <div class="color-cars">
                  <input type="radio" id="orange" name="color-cars" value="16">
                  <label for="orange" class="lable-checkbox-color" style="background-color:orange;"></label>
              </div>
       </div>
    <!-- end color -->

  </div>

      <form id="frm" >
           <div id="drop-area">
            <h4 class="drop-text">Перетащите изображение</h4>
               <input type="file" id="file-input" name="file_img"/>
            </div>
       </form>
      <div id="conteiner-image-add"></div>

      <div class="butnext block-row">
        <a href="#" id="butLeftCarsHar" class="but-a">Назад</a>
          <a href="#" id="butRightCarsKomplekt" class="but-a">Дальше</a>
      </div>
  </div>

  <div id="section-komplekt-cars" class="section-addcars">
      <h3>Комплектация автомобиля</h3>
        <div class="komfort-cars block-row">
          <div class="komplekt-column block-column">
            <h4>Комфорт</h4>
            <div class="block-select block-column">
              <select  name="electro_steklo">
                <option value="0">Электрические стеклоподъемники</option>
                <option value="1">Передние</option>
                <option value="2">Все</option>
              </select>
            </div>
            <div class="block-select block-column">
              <select  name="klimat_kontrol">
                <option value="0">Климат-контроль в автомобиле</option>
                <option value="1">Есть</option>
                <option value="2">Многозонный</option>
              </select>
            </div>
            <div class="block-select block-column">
              <select name="obogrev_siden">
                <option value="0">Обогрев сидений</option>
                <option value="1">Передних</option>
                <option value="2">Всех</option>
                <option value="3">Есть</option>
              </select>
            </div>
            <div class="block-select block-column">
              <select  name="reg_rul">
                <option value="0">Регулировка руля</option>
                <option value="1">Есть</option>
                <option value="2">В одной плоскости</option>
                <option value="3">В двух плоскосях</option>
              </select>
            </div>
            <div class="block-select block-column">
              <select name="usilitel_rul">
                <option value="0">Усилитель руля</option>
                <option value="1">Отсутствует</option>
                <option value="2">Гидроусилитель</option>
                <option value="3">Электрогидроусилитель</option>
                <option value="4">Электроусилитель</option>
              </select>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Kondicioner" name="checkbox" value="Кондиционер">
                <span>Кондиционер</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Tonirovka-stekla" name="checkbox" value="Тонированные стекла">
                <span>Тонированные стекла</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Kamera-zadnego-vida" name="checkbox" value="Камера заднего вида">
                <span>Камера заднего вида</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Parktronik-zad" name="checkbox" value="Парктроник задний">
                <span>Парктроник задний</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Parktronik-pered" name="checkbox" value="Парктроник передний">
                <span>Парктроник передний</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Zapusk-dvig-but" name="checkbox" value="Запуск двигателя с кнопки">
                <span>Запуск двигателя с кнопки</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Kruiz-kontrol" name="checkbox" value="Круиз-контроль">
                <span>Круиз-контроль</span>
            </div>

          </div>
          <div class="komplekt-column">
            <h4>Безопасность</h4>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="bez-abs" name="" value="ABS">
                <span>ABS</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="bez-esp" name="" value="ESP">
                <span>ESP</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Antiprobuks-sistem" name="" value="Антипробуксовочная система">
                <span>Антипробуксовочная система</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Sistema-noch-vid" name="" value="Система ночного видения">
                <span>Система ночного видения</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Podushka-bez-vod" name="" value="Подушка безопасности водителя">
                <span>Подушка безопасности водителя</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Podushka-bez-pas" name="" value="Подушка безопасности пассажира">
                <span>Подушка безопасности пассажира</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Podushka-bez-bok" name="" value="Подушки безопасности боковые">
                <span>Подушки безопасности боковые</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Podushka-bez-bok-zad" name="" value="Подушки безопасности боковые задние">
                <span>Подушки безопасности боковые задние</span>
            </div>
            <h4>Элементы экстерьера</h4>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Za-kartera" name="" value="Защита картера">
                <span>Защита картера</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Pnevmopodveska" name="" value="Пневмоподвеска">
                <span>Пневмоподвеска</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Legko-diski" name="" value="Легкосплавные диски">
                <span>Легкосплавные диски</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Zim-shini" name="" value="Зимние шины">
                <span>Зимние шины</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Farcop" name="" value="Фаркоп">
                <span>Фаркоп</span>
            </div>

          </div>
          <div class="komplekt-column">

            <h4>Салон и интерьер</h4>
            <div class="block-select block-column">
              <select class="Obivka-salona" name="obiv-salona">
                <option value="0">Обивка салона</option>
                <option value="1">Велюр</option>
                <option value="2">Кожа</option>
                <option value="3">Ткань</option>
                <option value="4">Комбинированная</option>
              </select>
            </div>
            <div class="block-select block-column">
              <select class="count-mest" name="count-mest">
                <option value="0">Количество мест</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">>5</option>
              </select>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Panoram-krish" name="" value="Панорамная крыша">
                <span>Панорамная крыша</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Luk" name="" value="Люк">
                <span>Люк</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Koja-rul" name="" value="Кожаный руль">
                <span>Кожаный руль</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Svet-salon" name="" value="Светлый салон">
                <span>Светлый салон</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Temn-salon" name="" value="Темный салон">
                <span>Темный салон</span>
            </div>
            <h4>Обзор</h4>
            <div class="block-select block-column">
              <select class="fari" name="fari-cars">
                <option value="0">Фары </option>
                <option value="1">Галогенные</option>
                <option value="2">Ксеноновые</option>
                <option value="3">Биксеноновые</option>
                <option value="4">Светодиодные</option>
              </select>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Prot-fari" name="" value="Противотуманные фары">
                <span>Противотуманные фары</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Omiv-far" name="" value="Омыватели фар">
                <span>Омыватели фар</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="Elek-zerk" name="" value="Электрические зеркала">
                <span>Электрические зеркала</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="datchik-dojdya" name="" value="Датчик дождя">
                <span>Датчик дождя</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="datchik-sveta" name="" value="Датчик света">
                <span>Датчик света</span>
            </div>
            <div class="komplekt-check-cars block-row">
                <input type="checkbox" id="obogrev-zerkal" name="" value="Обогрев зеркал">
                <span>Обогрев зеркал</span>
            </div>

          </div>
        </div>
        <!-- <div class="bezopasnost-cars"></div>
        <div class="komfort-cars"></div>
        <div class="salon-cars"></div>
        <div class="komfort-cars"></div>
        <div class="zashita-ot-ugona-cars"></div>
        <div class="multimedia-cars"></div> -->
        <div class="butnext block-row">
          <a href="#" id="butLeftCarsKomNone" class="but-a">Назад</a>
            <a href="#" id="butRightCarsPrice" class="but-a">Дальше</a>
        </div>
  </div>
      <div id="section-price-cars" class="class-price block-column">
        <h3>Описание и  цена</h3>
        <div class="sostayani-cars block-row">
          <div class="komplekt-check-cars block-row">
              <input type="checkbox" id="bitaya-vmyat" name="" value="Битая или есть вмятина">
              <span>Битая или есть вмятина</span>
          </div>
          <div class="komplekt-check-cars block-row">
              <input type="checkbox" id="avto_no_bibi" name="" value="Машина не на ходу">
              <span>Машина не на ходу</span>
          </div>
          <div class="komplekt-check-cars block-row">
              <input type="checkbox" id="ne_rastamojen" name="" value="Не растаможен">
              <span>Не растаможен</span>
          </div>

        </div>
        <div class="opisanie-cars">
          <h4>Описание автомобиля</h4>
          <textarea placeholder="Введите описание автомобиля" id="text-opisanie" class="opisanie-cars-textarea"></textarea>
        </div>
      <div class="prace-cars-block block-row">
        <div class="price-cars">
          <h4>Цена<i>*</i></h4>
          <input type="number" name="price_cars" value="">
        </div>
      </div>
      <div class="check-torg block-row">
          <input type="checkbox" id="torg-umesten" name="" value="Торг уместен">
          <span>Торг уместен</span>
      </div>

        <div class="butnext block-row">
          <a href="#" id="butLeftCarsKomflex" class="but-a">Назад</a>
            <a href="#" id="butRightCarsContact" class="but-a">Дальше</a>
        </div>
        <!-- end section  -->
      </div>
      <div id="section-contakt-cars" class="contact-cars block-column">
        <h3>Контактные данные</h3>

        <div class="contact-input block-column">
          <span>Город продажи</span>
            <input type="text" id="cite-prod" placeholder="Введите город продажи"  value="">
        </div>
        <div class="contact-input block-column">
          <span>Место осмотра</span>
            <input type="text" id="mesto-osmotra" placeholder="Введите место осмотра машины"  value="">
        </div>
        <div class="contact-input block-column">
          <span>Введите номер телефона</span>
            <input type="text" id="telefon-user-cars" placeholder="Введите номер телефона"  value="">
        </div>

        <div class="butnext block-row">
          <a href="#" id="butLeftCarsKomNone" class="but-a">Назад</a>
            <a href="#" id="butSaveCars" class="but-a">Сохранить</a>
        </div>
        <!-- end section  -->
      </div>

</div>



</div>
 <!-- <div class="kupi-menu-right">
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

 </div> -->
 <!--  left menu-->
 <?php  include ROOT . '/core/views/bazes/menu-left.php'; ?>
 </div>




<?php  include ROOT . '/core/views/bazes/footer.php'; ?>
