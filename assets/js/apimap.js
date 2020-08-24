// ymaps.ready(init);
// function init(){
//     // Создание карты.
//     var myMap = new ymaps.Map("map_add", {
//         // Координаты центра карты.
//         // Порядок по умолчанию: «широта, долгота».
//         // Чтобы не определять координаты центра карты вручную,
//         // воспользуйтесь инструментом Определение координат.
//         center: [55.76, 37.64],
//         // Уровень масштабирования. Допустимые значения:
//         // от 0 (весь мир) до 19.
//         zoom: 14,
//         controls: []
        
//     });

//     $('#ymap_input').on('input', function() {
//         var suggestView = new ymaps.SuggestView('ymap_input');
//         console.log(suggestView);
//     });


//     var myPlacemark = new ymaps.Placemark([55.76, 37.64], {
//         // Хинт показывается при наведении мышкой на иконку метки.
//         hintContent: 'Содержимое всплывающей подсказки',
//         // Балун откроется при клике по метке.
//         balloonContent: 'Содержимое балуна'
//     });
//    // После того как метка была создана, добавляем её на карту.
//     myMap.geoObjects.add(myPlacemark);
    
// }

ymaps.ready(init);

function init() {
    var myPlacemark,
        myMap = new ymaps.Map('map_add', {
            center: [55.753994, 37.622093],
            zoom: 12,
            //controls: []
        }, {
            searchControlProvider: 'yandex#search'
        });

        myMap.controls.remove("mapTools")
        .remove("typeSelector")
        .remove("searchControl")
        .remove("trafficControl")
        .remove("miniMap")
        .remove("scaleLine")
        .remove("routeEditor")
        .remove("smallZoomControl");


    // Слушаем клик на карте.
    myMap.events.add('click', function (e) {
        var coords = e.get('coords');
        console.log(coords);
        

        // Если метка уже создана – просто передвигаем ее.
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);
        }
        // Если нет – создаем.
        else {
            myPlacemark = createPlacemark(coords);
            myMap.geoObjects.add(myPlacemark);
            // Слушаем событие окончания перетаскивания на метке.
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
        }
        getAddress(coords);
    });

    // Создание метки.
    function createPlacemark(coords) {
        return new ymaps.Placemark(coords, {
            iconCaption: 'поиск...'
        }, {
            preset: 'islands#blueDotIcon',
            draggable: true
        });
    }

    // Определяем адрес по координатам (обратное геокодирование).
    function getAddress(coords) {
        myPlacemark.properties.set('iconCaption', 'поиск...');
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);

            $(".input-addres").val(firstGeoObject.getAddressLine());
            console.log(firstGeoObject.getAddressLine());
            
            myPlacemark.properties
                .set({
                    // Формируем строку с данными об объекте.
                    iconCaption: [
                        // Название населенного пункта или вышестоящее административно-территориальное образование.
                        firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                        // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                        firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                    ].filter(Boolean).join(', '),
                    // В качестве контента балуна задаем строку с адресом объекта.
                    balloonContent: firstGeoObject.getAddressLine()
                });
        });
    }
}