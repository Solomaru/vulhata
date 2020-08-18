<?php
$a['title']= 'Добавить аренду';
$a['description']='';
$a['js'][0] = '';
Lyamb::head($a);
// echo "<pre>";
// var_dump($marka);
// echo "</pre>";

 ?>


<div class="add-container-form">

  <h1 class="offer-title-add">Добавить новое объявление</h1>

  <div class="offer-group-type">

    <div class="items-type">
      <ul class="type-block">
          <li><button type="button" data-sosed-id="1" class="but-add-type but-type">Ищу соседа/соседку</button></li>
          <li><button type="button" data-sovmestnaya-id="2" class="but-add-type but-type">Совместная аренда</button></li>
          <li><button type="button" data-podselus-id="3" class="but-add-type but-type">Подселюсь</button></li>
          <li><button type="button" data-snyat-id="4" class="but-add-type but-type">Снять</button></li>
          <li><button type="button" data-sutki-id="4" class="but-add-type but-type">Посуточная аренда</button></li>
      </ul>
    </div>

  </div>
  <div class="offer-group-category">
    <h2 class="offer-title-add">Выиерете тип недвижимости</h2>
    <ul class="type-block">
        <li><button type="button" data-kvartira-id="1" class="but-add-category but-category">Квартира</button></li>
        <li><button type="button" data-komnata-id="2" class="but-add-category but-category">Комната</button></li>
        <li><button type="button" data-dom-id="3" class="but-add-category but-category">Дом</button></li>
    </ul>
  </div>
  <div class="offer-group-location">
    <h2 class="offer-title-add">Адрес</h2>
    <div class="location-container input-add-location">
      <input type="text" placeholder="Введите адрес" name="" value="">
    </div>
  </div>
  <div class="offer-group-building">
    <h2 class="offer-title-add">О доме</h2>
    <div class="building-container">
      <div class="">
        <span>Год постройки</span>
      </div>
      <div class="">
        <span>Высота потолков</span>
      </div>
      <div class="">
        <ul class="building-block-park">
          <span>Тип парковки</span>
            <li><button type="button" data-podzemnaya-id="1" class="but-add-building but-building">Подземная</button></li>
            <li><button type="button" data-zakritaya-id="2" class="but-add-building but-building">Закрытая</button></li>
            <li><button type="button" data-nazemnaya-id="3" class="but-add-building but-building">Наземная</button></li>
        </ul>
      </div>
      <div class="type-dom">

        <ul class="building-block-type-dom">
          <span>Тип дома</span>
            <li><button type="button" data-panel-id="1" class="but-add-building but-building">Панельный</button></li>
            <li><button type="button" data-kirpich-id="2" class="but-add-building but-building">Кирпичный</button></li>
            <li><button type="button" data-monolit-id="3" class="but-add-building but-building">Монолит</button></li>
            <li><button type="button" data-block-id="4" class="but-add-building but-building">Блок</button></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="offer-group-properties">
    <h2 class="offer-title-add">О квартире</h2>
    <div class="block-properties">

    </div>
    <div class="block-properties">
      <span>Комнат</span>
      <ul class="komnat-block-type-dom">
          <li><button type="button" data-one-id="1" class="but-add-building but-building">1</button></li>
          <li><button type="button" data-too-id="2" class="but-add-building but-building">2</button></li>
          <li><button type="button" data-monolit-id="3" class="but-add-building but-building">3</button></li>
          <li><button type="button" data-block-id="4" class="but-add-building but-building">4</button></li>
      </ul>
    </div>
    <div class="block-properties">
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

  <div class="offer-group-images">
    <h2 class="offer-title-add">Фотографии</h2>
  </div>
  <div class="offer-group-comfort">
    <h2 class="offer-title-add">Удобства</h2>
  </div>

  <div class="offer-group-price">
    <h2 class="offer-title-add">Цена</h2>
  </div>

  <div class="offer-group-contact">
    <h2 class="offer-title-add">Контакты</h2>
  </div>





</div>





























<?php  include ROOT . '/core/views/bazes/footer.php'; ?>
