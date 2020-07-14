document.addEventListener('DOMContentLoaded', function(){

  var idsectionmarka = document.getElementById("section-marka-cars");
  var idsectionmodel = document.getElementById("section-model-cars");

    var butMark = document.getElementsByClassName('butMark');
    for(var i = 0; i < butMark.length; i++){
           butMark[i].onclick = function(e){
                 var removeC = document.getElementsByClassName('but-v');
                 if(removeC.length > 0){
                   removeC[0].classList.remove('but-v');
                   e.target.classList.add('but-v');
                 }else {
                   e.target.classList.add('but-v');
                 }
                 idsectionmarka.style.display = 'none';
                 var but_v = document.getElementsByClassName('but-v')[0];
                 var data_id_market = but_v.dataset.markaid;
                  console.log(data_id_market);
                  $.post('/handler/modelid',
                  //{ids: JSON.stringify(dataUri)},
                  {model_id: data_id_market},
                   function(data){
                         data = $.parseJSON(data);
                         console.log(data);
                         var idsectionmodel = document.getElementById("section-model-cars");
                         idsectionmodel.style.display = 'flex';
                         var model = document.getElementsByClassName("model-cars")[0];
                         model.parentNode.removeChild(model);
                         model = document.createElement('ul');
                         model.setAttribute("class","model-cars");
                         idsectionmodel.appendChild(model);
                         for(c = 0; c < data.length; c++){
                           var model = document.getElementsByClassName("model-cars")[0];
                           var li = document.createElement('li');
                           var button = document.createElement('button');

                           button.setAttribute("class","butModel");
                           button.setAttribute("data-modelid", data[c]['id']);
                           button.innerHTML = data[c]['model'];
                           li.appendChild(button);
                           model.appendChild(li);
                         }

                         //ловим клик
                         var butModel = document.getElementsByClassName("butModel");
                         console.log(butModel.length);
                         for(m = 0; m < butModel.length;m++){
                           butModel[m].onclick = function(el){
                             var removClass = document.getElementsByClassName('but-model');
                             console.log(removClass.length);
                             var idsectionmodel = document.getElementById("section-model-cars");
                             var idsectionharak = document.getElementById("section-harak-cars");
                             idsectionmodel.style.display = 'none';
                             idsectionharak.style.display = 'flex';
                             if(removClass.length > 0){
                              removClass[0].classList.remove('but-model');
                               el.target.classList.add('but-model');
                             }else {
                               el.target.classList.add('but-model');
                             }
                           }
                           //end for
                         }
                    //end ajax post
                   });


            //end onclick
            }

     ////end for
     }
//metim knopki
function butAktiv(classN){
  var but_kuzov = document.getElementsByClassName(classN);
  for(k = 0; k < but_kuzov.length; k++){
    but_kuzov[k].onclick = function(e){

      var removeAktivBut = document.getElementsByClassName('aktiv-'+classN);
      if(removeAktivBut.length > 0){
          removeAktivBut[0].classList.remove('aktiv-'+classN);
          e.target.classList.add("aktiv-"+classN);
      }else {
          e.target.classList.add("aktiv-"+classN);
      }
    }
  }
//end function
}
butAktiv("but-kuzov");
butAktiv("but-dver-count");
butAktiv("but-korobka-peredac");
butAktiv("but-privod");
butAktiv("but-rul");
butAktiv("but-dvigatel");

//button navig
function butNavigat(butNav, sec, secf){
  var nextBut = document.getElementById(butNav);
  nextBut.onclick = function(){
        var section_none = document.getElementById(sec);
        var section_flex = document.getElementById(secf);
        section_none.style.display = 'none';
        section_flex.style.display = 'flex';
      }
//end function
}
butNavigat("butRightCars", "section-harak-cars", "section-vid-cars");
butNavigat("butLeftCars", "section-harak-cars", "section-model-cars");
butNavigat("butLeftCarsHar", "section-vid-cars", "section-harak-cars");
butNavigat("butRightCarsKomplekt", "section-vid-cars", "section-komplekt-cars");
butNavigat("butLeftCarsKomNone","section-komplekt-cars","section-vid-cars")//left
butNavigat("butRightCarsPrice","section-komplekt-cars","section-price-cars")//right
butNavigat("butLeftCarsKomflex","section-price-cars", "section-komplekt-cars")//left
butNavigat("butRightCarsContact", "section-price-cars", "section-contakt-cars")//right

// var nextRight = document.getElementById("butRightCars");
// nextRight.onclick = function(){
//       var section_harak = document.getElementById("section-harak-cars");
//       var section_vid = document.getElementById("section-vid-cars");
//       section_harak.style.display = 'none';
//       section_vid.style.display = 'flex';
// }
// var nextLeft = document.getElementById("butLeftCars");
// nextLeft.onclick = function(){
//       var section_harak = document.getElementById("section-harak-cars");
//       var section_model = document.getElementById("section-model-cars");
//       section_harak.style.display = 'none';
//       section_model.style.display = 'flex';
// }
//
// var butLeftCarsHar = document.getElementById("butLeftCarsHar");
// butLeftCarsHar.onclick = function(){
//   var section_vid = document.getElementById("section-vid-cars");
//   var section_harak = document.getElementById("section-harak-cars");
//   section_vid.style.display = 'none';
//   section_harak.style.display = 'flex';
// }
// var butRightCarsKomplekt = document.getElementById("butRightCarsKomplekt");
// butRightCarsKomplekt.onclick = function(){
//   var section_vid = document.getElementById("section-vid-cars");
//   var section_komplekt = document.getElementById("section-komplekt-cars");
//   section_vid.style.display = 'none';
//   section_komplekt.style.display = 'flex';
// }
//vneshni vid start

//image startCont
$("#drop-area").on('dragenter', function (e){
      e.preventDefault();
      $(this).css('background', '#95bbdf');
  });
$("#drop-area").on('dragover', function (e){
       e.preventDefault();
});
// загрузка при перетаскивание
  $("#drop-area").on('drop', function (e){
      $(this).css('background', '#eee');
      e.preventDefault();

      var image = e.originalEvent.dataTransfer.files[0];
      createImg(image);
      //modal.style.display = "none";
});
//загрузка через кнопку
  $("#file-input").change(function() {
     // выводим объект FileLis
     createImg(this.files[0]);
     // Очищаем инпут файл путем сброса формы
      $('#frm').each(function(){
              this.reset();
      });
        //modal.style.display = "none";
});

function createImg(image){
console.log(image);
var reader = new FileReader();
reader.onload = function(event) {
      // console.log(event.target);
      var dataUri = event.target.result;
      var nameImg = image.name;

  var contimage = document.getElementById("conteiner-image-add");
  var imagionload = contimage.querySelectorAll('img');
      $.post('/handler/fotosave',
      //{ids: JSON.stringify(dataUri)},
      {ids: dataUri, name: nameImg},
       function(data) {
         data = $.parseJSON(data);
         console.log(data);
         console.log(imagionload);


         var contimage = document.getElementById("conteiner-image-add");
         //contimage.style.display = "block";
         var img = document.createElement("img");
         img.src = data[0];
         //contimage.appendChild(img);


                  if(data[1] > data[2]){
                    //img.style.max-width = 510 + 'px';
                    img.style.width = 170 + 'px';
                    img.style.height = 120 + 'px';
                    img.setAttribute("class","fo_image");
                    contimage.appendChild(img);
                  }else {
                    img.style.width = 90 + 'px';
                    img.style.height = 120 + 'px';
                    img.setAttribute("class","fo_image");
                    contimage.appendChild(img);
                  }

      ////end ajax
       });

}
reader.onerror = function(event) {
    console.error("Файл не может быть прочитан! код " + event.target.error.code);
};
reader.readAsDataURL(image);
//console.log(dataArray);

}
//end image
//end добавление изображение

//delit image
var contimage = document.getElementById("conteiner-image-add");

contimage.onclick = function(e){
var src = e.target;
var urlImg = e.target.src;
  $.post('/handler/delfoto',
  {urlmg: urlImg},
   function(data) {
     if(e.target.tagName == 'IMG'){
       src.remove();
     }

     if(contimage.querySelectorAll('img').length == 0){
       contimage.style.display = 'none';
     }

  });
}
//delit image
//end vid




var saveCars = document.getElementById("butSaveCars");
saveCars.onclick = function(){

var arr_cars={};
var arrImg = [];
var arrKomplekt = {};

arr_cars['markaSave'] = document.getElementsByClassName('but-v')[0].getAttribute("data-markaid");
arr_cars['modelSave'] = document.getElementsByClassName('but-model')[0].getAttribute("data-modelid");
arr_cars['god_vipuska'] = document.getElementsByName("god_vipuska")[0].value;
arr_cars['probeg'] = document.getElementsByName("probeg")[0].value;
arr_cars['volume'] = document.getElementsByName("volume")[0].value;
arr_cars['moshnost_dvigatelya'] = document.getElementsByName("moshnost_dvigatelya")[0].value;
arr_cars['but_kuzov'] = document.getElementsByClassName("aktiv-but-kuzov")[0].getAttribute("data-cuzov-id");
arr_cars['dver_count'] = document.getElementsByClassName("aktiv-but-dver-count")[0].getAttribute("data-dver");
arr_cars['korobka_peredac'] = document.getElementsByClassName("aktiv-but-korobka-peredac")[0].getAttribute("data-korobka-peredac-id");
arr_cars['but_privod'] = document.getElementsByClassName("aktiv-but-privod")[0].getAttribute("data-privod-id");
arr_cars['but_rul'] = document.getElementsByClassName("aktiv-but-rul")[0].getAttribute("data-rul");
arr_cars['but_dvigatel'] = document.getElementsByClassName("aktiv-but-dvigatel")[0].getAttribute("data-dvigatel-id");
// добавляем цвет
var color_cars = document.getElementsByName("color-cars");
for(var p = 0; p < color_cars.length; p++){
        if(color_cars[p].checked){
          arr_cars['color_cars'] = color_cars[p].value;
        }
//end for
}
//берем ссылки картинок
var classList = document.getElementsByClassName("fo_image");
 for(var i=0; i < classList.length; i++){
   arrImg[i]= classList[i].src;
 }
// собираем масив комплектации
arrKomplekt['electro_steklo'] = document.getElementsByName("electro_steklo")[0].value;
arrKomplekt['klimat_kontrol'] = document.getElementsByName("klimat_kontrol")[0].value;
arrKomplekt['obogrev_siden'] = document.getElementsByName("obogrev_siden")[0].value;
arrKomplekt['reg_rul'] = document.getElementsByName("reg_rul")[0].value;
arrKomplekt['usilitel_rul'] = document.getElementsByName("usilitel_rul")[0].value;
arrKomplekt['obiv-salona'] = document.getElementsByName("obiv-salona")[0].value;
arrKomplekt['count-mest'] = document.getElementsByName("count-mest")[0].value;
arrKomplekt['fari-cars'] = document.getElementsByName("fari-cars")[0].value;

arrTegId = ["Kondicioner","Tonirovka-stekla","Kamera-zadnego-vida","Parktronik-zad","Parktronik-pered","Zapusk-dvig-but",
"Kruiz-kontrol","bez-abs","bez-esp","Antiprobuks-sistem","Sistema-noch-vid","Podushka-bez-vod","Podushka-bez-pas",
"Podushka-bez-bok","Podushka-bez-bok-zad","Za-kartera","Pnevmopodveska","Legko-diski","Zim-shini","Farcop","Panoram-krish",
"Luk","Koja-rul","Svet-salon","Temn-salon","Prot-fari","Omiv-far","Elek-zerk","datchik-dojdya","datchik-sveta","obogrev-zerkal",
"bitaya-vmyat","avto_no_bibi","ne_rastamojen","torg-umesten"];

function sborKomfort(atribut_id){
  for(var i = 0; i<atribut_id.length; i++){
      if(document.getElementById(atribut_id[i]).checked){
        arrKomplekt[atribut_id[i]] = document.getElementById(atribut_id[i]).value;
      }else {
        arrKomplekt[atribut_id[i]] = "null";
      }
  //end for
  }
//end function
}
sborKomfort(arrTegId);
arrKomplekt['text-opisanie'] = document.getElementById("text-opisanie").value;
arrKomplekt['price_cars'] = document.getElementsByName("price_cars")[0].value;
arrKomplekt['cite-prod'] = document.getElementById("cite-prod").value;
arrKomplekt['mesto-osmotra'] = document.getElementById("mesto-osmotra").value;
arrKomplekt['telefon-user-cars'] = document.getElementById("telefon-user-cars").value;

console.log(arr_cars);
console.log(arrKomplekt);
// console.log(arrImg);
// console.log(arrKomplekt);
$.post('/cars/addcars',
//{ids: JSON.stringify(dataUri)},
//, arrImg: arrImg , arrKomplekt: JSON.stringify(arrKomplekt)
{send:JSON.stringify(arr_cars),arrImg:arrImg,komplekt: JSON.stringify(arrKomplekt)},
 function(data) {

console.log(data);


 });
//end onklick
}



}, false);
