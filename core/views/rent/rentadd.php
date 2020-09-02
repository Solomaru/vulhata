<?php
$a['title']= 'Добавить аренду';
$a['description']='';
$a['js'][0] = 'apimap.js';
Lyamb::head($a);
// echo "<pre>";
// var_dump($type_parcing);
// echo "</pre>";

 ?>


<div class="add-container-form" data-addrent-id="">
<div class="title-add-rent">
    <i class="fab fa-tripadvisor" aria-hidden="true"></i>
    <h1 class="offer-title-add">Добавить новое объявление</h1>
    <i class="fab fa-tripadvisor" aria-hidden="true"></i>
</div>


  <div class="offer-group-type">

    <div class="items-type">
    <h2 class="offer-title-add">Выберите категорию:</h2>
      <ul class="type-block">
         <li>
          <button type="button" data-sosed-id="1" class="but-add-type but-type">
            <div class="fa-icon-btn"><i class="fas fa-restroom"></i></div>
            <span>Ищу соседа/соседку</span>
          </button>
        </li>
          <li>
            <button type="button" data-sovmestnaya-id="2" class="but-add-type but-type">
            <div class="fa-icon-btn"><i class="fa fa-people-arrows"></i></div>
              <span>Совместная аренда</span>
            </button>
          </li>
          <li>
            <button type="button" data-podselus-id="3" class="but-add-type but-type">
            <div class="fa-icon-btn"><i class="fas fa-users"></i></div>
              <span>Подселюсь</span>
            </button>
          </li>
          <li>
            <button type="button" data-snyat-id="4" class="but-add-type but-type"> 
            <div class="fa-icon-btn"><i class="fas fa-street-view"></i></div>
             <span>Снять</span>
            </button>
          </li>
          <li>
            <button type="button" data-snyat-id="4" class="but-add-type but-type"> 
            <div class="fa-icon-btn"><i class="fas fa-street-view"></i></div>
             <span>Сдать</span>
            </button>
          </li>
          <li>
            <button type="button" data-sutki-id="4" class="but-add-type but-type">     
            <div class="fa-icon-btn"><i class="fas fa-user-clock"></i></div>
              <span>Посуточная аренда</span>
            </button>
          </li>
      </ul>
    </div>

  </div>
  <div class="offer-group-category">
  <div class="items-type">
    <h2 class="offer-title-add">Выберите тип недвижимости:</h2>
    <ul class="type-block">
        <li>
          <button type="button" data-kvartira-id="1" class="but-add-category but-category">
          <div class="fa-icon-btn"><i class="far fa-building"></i></div>
            <span>Квартира</span>
          </button></li>
        <li>
          <button type="button" data-komnata-id="2" class="but-add-category but-category">   
          <div class="fa-icon-btn"><i class="fas fa-door-closed"></i></div>
           <span>Комната</span>
          </button>
        </li>
        <li>
          <button type="button" data-dom-id="3" class="but-add-category but-category">
          <div class="fa-icon-btn"><i class="fas fa-home"></i></div>
           <span>Дом</span>
          </button></li>
    </ul>
</div>
  </div>


  <div class="offer-group-location">
  <div class="items-type">
    <h2 class="offer-title-add">Выберите адрес на карте:</h2>
    <div id="map_add" class="map-cont-add"></div>
    <div class="location-container input-add-location">
      <input id="ymap_input" class="input-addres" type="text" placeholder="Назмите на нужный адрес на карте" name="" value="" >
    </div>

      
    </div>
  </div>


  <div class="offer-group-building">
<div class="items-type">
    <h2 class="offer-title-add">О доме:</h2>
    <div class="building-container">
  <div class="input-o-home">
      <div class="g-postr">
        <span>Год постройки</span>
        <div>
        <input type="text" name="" value="" placeholder="Год постройки">
        </div>
      </div>
      <div class="v-potolok">
        <span>Высота потолков</span>
        <div>
        <input type="text" name="" value="" placeholder="Высота потолков">
        </div>
      </div>
  </div>
      <div class="type-park">
      <span>Тип парковки</span> 
        <ul class="building-block-park">        
            <?php foreach($type_parcing as $parcing):?>
            <li><button type="button" data-<?=$parcing['name_us']?>-id="<?=$parcing['id']?>" class="but-add-building but-building"><?=$parcing['name_ru']?></button></li>
            <?php endforeach; ?>
         </ul>
      </div>
      <div class="type-dom">
      <span>Тип дома</span>
        <ul class="building-block-type-dom">
          
          <?php foreach($type_home as $type_hom):?>
          <li><button type="button" data-<?=$type_hom['name_us']?>-id="<?=$type_hom['id']?>" class="but-add-building but-building"><?=$type_hom['name_ru']?></button></li>
           <?php endforeach; ?>       
       </ul>
      </div>
    </div>
    </div>
  </div>
<span></span>


  <div class="offer-group-properties">
  <div class="items-type">
    <h2 class="offer-title-add">О квартире:</h2>
    <div class="block-properties">

    </div>

    <div class="block-properties">
      <span>Комнат</span>
      <ul class="komnat-block-type-dom">
          <li><button type="button" data-one-id="1" class="but-add-building but-building">1</button></li>
          <li><button type="button" data-too-id="2" class="but-add-building but-building">2</button></li>
          <li><button type="button" data-monolit-id="3" class="but-add-building but-building">3</button></li>
          <li><button type="button" data-block-id="4" class="but-add-building but-building">4</button></li>
          <li><button type="button" data-block-id="5" class="but-add-building but-building">5</button></li>
          <li><button type="button" data-block-id="5" class="but-add-building but-building">Больше 5</button></li>
      </ul>
    </div>
    <div class="block-properties block-properties-flex">
      <span>Площадь кв.м</span>
      <input type="text" name="" value="" placeholder="Общая">
      <input type="text" name="" value="" placeholder="Жилая">
      <input type="text" name="" value="" placeholder="Кухня">
    </div>
    <div class="block-properties">

    </div>
    <div class="block-properties">

    </div>
    <div class="block-properties">

    </div>
    <div class="block-properties">

    </div>
  </div>
</div>
  <div class="offer-group-images">
  <div class="items-type">
      <h2 class="offer-title-add">Фотографии:</h2>
      <div class="images-container">
      <div id="errorImg"></div> 
       <form id="frm">    
          <div id="max-img" class="imege-max"></div>
           <div id="drop-area">
            <h3 class="drop-text">Перетащите изображение</h3>
                    <input type="file" id="file-input" name="file_img"/>
            </div> 
            <div id="res" class="imege-res">
                  <ul id="uploadImagesList">
                      <li class="item template">
                          <span class="img-wrap">
                              <img src="image.jpg" alt="">
                          </span>
                          <span class="delete-link" title="Удалить">Удалить</span>
                      </li>
                  </ul>
            </div>
        </form>
      
      </div>
  </div>
  
  </div>
  <div class="offer-group-comfort">
  <div class="items-type">
    <h2 class="offer-title-add">Удобства:</h2>
    <ul class="btns-comfort">
          <li><button type="button" data-one-id="1" class="btn-comfort-item">Интернет</button></li>
          <li><button type="button" data-too-id="2" class="btn-comfort-item">Стиральная машина</button></li>
          <li><button type="button" data-monolit-id="3" class="btn-comfort-item">Холодильник</button></li>
          <li><button type="button" data-block-id="4" class="btn-comfort-item">Посудомойка</button></li>
          <li><button type="button" data-block-id="5" class="btn-comfort-item">Телевизор</button></li>
          <li><button type="button" data-too-id="6" class="btn-comfort-item">Кондиционер</button></li>
          <li><button type="button" data-one-id="7" class="btn-comfort-item">Мебель на кухне</button></li>
          <li><button type="button" data-one-id="8" class="btn-comfort-item">Мебель в жилой</button></li>
          <li><button type="button" data-monolit-id="9" class="btn-comfort-item">Можно с животными</button></li>
          <li><button type="button" data-block-id="10" class="btn-comfort-item">Можнро с детьми</button></li>
          <li><button type="button" data-too-id="11" class="btn-comfort-item">Лифт</button></li>
          <li><button type="button" data-monolit-id="12" class="btn-comfort-item">Мусорпровод</button></li>
          <li><button type="button" data-block-id="13" class="btn-comfort-item">Консьерж</button></li>
          <li><button type="button" data-block-id="14" class="btn-comfort-item">Закрытая территория</button></li>
      </ul>
      <h2 class="offer-title-add">Коментарий и описание:</h2>
      <textarea name="description" placeholder="Опишите недвижимость"></textarea>
  </div>
  </div>

  <div class="offer-group-price">
  <div class="items-type">
    <h2 class="offer-title-add">Цена</h2>
    <div class="input-price">
      <!-- <input id="decimal" type="text" name="" value="" placeholder="Цена" > -->
      <input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="₽">
    </div>

    <div class="additionally">
    <span>Дополнительно</span>
      <ul class="komnat-block-type-dom">
          <li><button type="button" data-one-id="1" class="but-add-building but-building">Нужен залог</button></li>
          <li><button type="button" data-too-id="2" class="but-add-building but-building">Комунальные услуги включены</button></li>
          <li><button type="button" data-monolit-id="3" class="but-add-building but-building">Возможен торг</button></li>
      </ul>
    </div>
   </div>
  </div>


<div class="offer-group-contact">
<div class="items-type">
    <h2 class="offer-title-add">Контакты</h2>

    <div class="type-akkaunt">
    <span>Тип аккаунта</span>
      <ul class="komnat-block-type-dom">
          <li><button type="button" data-one-id="1" class="but-add-building but-building">Собственик</button></li>
          <li><button type="button" data-too-id="2" class="but-add-building but-building">Агент</button></li>
          <li><button type="button" data-monolit-id="3" class="but-add-building but-building">Агенство</button></li>
      </ul>
    </div>


    <div class="container-input-user">
        <div class="flex-input-contact">
          <span>Как обращаться:</span>
          <div class="input-name">
            <input type="text" name="" value="" placeholder="Имя">
          </div>
        </div>
        
        <div class="flex-input-contact">
        <span>Эл. почта:</span>
        <div class="input-email">
          <input type="text" name="" value="" placeholder="@mail">
        </div>
        </div>

        <div class="flex-input-contact">
        <span>Ваш телефон:</span>
        <div class="input-phone">
          <input id="phone" type="tel" name="phone" placeholder="Телефон" required pattern="^\+\d[-]\(\d{3}\)[-]\d{3}[-]\d{2}[-]\d{2}$">
        </div>
       </div>
      </div>
    </div>
</div>





</div>





























<?php  include ROOT . '/core/views/bazes/footer.php'; ?>
