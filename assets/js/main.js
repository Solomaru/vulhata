// window.onload=function(){
//
// var butVhod = document.getElementById("but-vhod");
// butVhod.onclick = function(){
//   var mainReg = document.getElementById("main-reg");
//   var mainVhod = document.getElementById("main-vhod");
//    mainReg.style.display = 'none';
//    mainVhod.style.display = 'block';
// }
// var butReg = document.getElementById("but-reg");
// butReg.onclick = function(){
//   var mainReg = document.getElementById("main-reg");
//   var mainVhod = document.getElementById("main-vhod");
//    mainReg.style.display = 'block';
//    mainVhod.style.display = 'none';
// }
//
// //отправка формы
// var saveReg = document.getElementById("saveReg");
// saveReg.onclick = function(){
//   var msg   = $('#formy').serialize();
//          $.ajax({
//                type: 'POST',
//                url: '/user/regist',
//                data: msg,
//                success: function(data) {
//                 // $('#results').html();
//                  console.log(data);
//                  setTimeout('location.replace("/feed")',1000);
//                },
//                error:  function(xhr, str){
//                alert('Возникла ошибка: ' + xhr.responseCode);
//                }
//          });
//
// }
// //вход на сайт
// var vhodClic = document.getElementById("vhodClic");
// vhodClic.onclick = function(){
//   var msg   = $('#formx').serialize();
//   console.log(msg);
//          $.ajax({
//                type: 'POST',
//                url: '/user/login',
//                data: msg,
//                success: function(data){
//                 // $('#results').html();
//                  console.log(data);
//               //setTimeout('location.replace("/feed")',1000);
//                },
//                error:  function(xhr, str){
//                alert('Возникла ошибка: ' + xhr.responseCode);
//                }
//          });
//   //end vhodClic
// }
//
//
//
// //end onload
// }
$(document).ready ( function(){
  var site = {};
   $('#topProfMenu').on('click', function(){
  //   $('#UserTopMinu').slideToggle(300).css('display','flex');
        $('.minuUserTop').slideToggle(300).css('display','flex');
 });



 var maxFileSize = 2 * 1024 * 1024; // (байт) Максимальный размер файла (2мб)
 var queue = {};
 var countFile = 5;
 var form = $('form#uploadImages');
 var imagesList = $('#uploadImagesList');

 var itemPreviewTemplate = imagesList.find('.item.template').clone();
 itemPreviewTemplate.removeClass('template');
 imagesList.find('.item.template').remove();



// Фотографии
$("#drop-area").on('dragenter', function (e){
  e.preventDefault();
  $(this).css('background', '#eeeeee');
});

$("#drop-area").on('dragover', function (e){
   e.preventDefault();
});

// загрузка при перетаскивание
$("#drop-area").on('drop', function (e){
  $(this).css('background', '#eee');
  e.preventDefault();

  var image = e.originalEvent.dataTransfer.files;        
  //createFormData(image);
  forImageFiles(image);
});

//загрузка через кнопку
$("#file-input").change(function() {
 // выводим объект FileLis
 // createFormData(this.files);
 forImageFiles(this.files);
 // Очищаем инпут файл путем сброса формы
  $('#frm').each(function(){
          this.reset();
  });

});


function forImageFiles(files){

    
  for (var i = 0; i < files.length; i++) {
    var file = files[i];

    if ( !file.type.match(/image\/(jpeg|jpg|png|gif)/) ) {
        alert( 'Фотография должна быть в формате jpg, png или gif' );
        continue;
    }

    if ( file.size > maxFileSize ) {
        alert( 'Размер фотографии не должен превышать 2 Мб' );
        continue;
    }
    if ( file.size > maxFileSize ) {
      alert( 'Размер фотографии не должен превышать 2 Мб' );
      continue;
    }
    console.log(i);
    
    if ( i == 5 ) {
      alert( 'Максимальная количество фотографий 5' );
      continue;
     }

    preview(files[i]);
}

this.value = '';
}

  // Удаление фотографий
  imagesList.on('click', '.delete-link', function () {
      var item = $(this).closest('.item'),
          id = item.data('id');

      delete queue[id];

      item.remove();
  });



// Создание превью
function preview(file) {
  var reader = new FileReader();
  reader.addEventListener('load', function(event) {
      var img = document.createElement('img');

      var itemPreview = itemPreviewTemplate.clone();

      itemPreview.find('.img-wrap img').attr('src', event.target.result);
      itemPreview.data('id', file.name);

      imagesList.append(itemPreview);

      queue[file.name] = file;

  });
  reader.readAsDataURL(file);
}











// //Подготавливаем файл имеги через FormData для отправки на сервеа
// function createFormData(image)
// {
//     var formImage = new FormData();
//     formImage.append('userImage', image[0]);

//     console.log(formImage);   
//     //uploadFormData(formImage);
// }









site.Rent = {

  


  /** Инициализация модуля */
	init: function() {
    // // var itemPreviewTemplate = site.Rent.imagesList.find('.item.template').clone();
    // site.Rent.itemPreviewTemplate.removeClass('template');
    // site.Rent.imagesList.find('.item.template').remove();
    // $("#drop-area").on('dragenter', function (e){
    //   e.preventDefault();
    //   $(this).css('background', '#eeeeee');
    // });

    // $("#drop-area").on('dragover', function (e){
    //   e.preventDefault();
    // });

    // // загрузка при перетаскивание
    // $("#drop-area").on('drop', function (e){
    //   $(this).css('background', '#eee');
    //   e.preventDefault();

    //   var image = e.originalEvent.dataTransfer.files;        
    //   //createFormData(image);
    //   site.Rent.forImageFiles(image);
    // });

    // //загрузка через кнопку
    // $("#file-input").change(function() {
    //   // выводим объект FileLis
    //   // createFormData(this.files);
    //   site.Rent.forImageFiles(this.files);
    //   // Очищаем инпут файл путем сброса формы
    //     $('#frm').each(function(){
    //             this.reset();
    //     });

    // });
    // var maxFileSize = 2 * 1024 * 1024; // (байт) Максимальный размер файла (2мб)
    // var queue = {};
    // var form = $('form#uploadImages');
    // var imagesList = $('#uploadImagesList');

    // var itemPreviewTemplate = imagesList.find('.item.template').clone();
    // itemPreviewTemplate.removeClass('template');
    // imagesList.find('.item.template').remove();

    site.Rent.eventButton();
    //site.Rent.imageUpload();



    // Удаление фотографий
    // site.Rent.imagesList.on('click', '.delete-link', function () {
    //   var item = $(this).closest('.item'),
    //       id = item.data('id');

    //   delete site.Rent.queue[id];

    //   item.remove();
    // });

  },
  eventButton: function(){

      //  Событие отвечает за нажатие кнопки для создание объявление и выдора категории
      $(".offer-group-type .type-block li button").click(function(e) {

        var v = $('.add-container-form').attr('data-addrent-id');
        function isEmpty(v) {
              if (v.trim() == '') 
                return true;
                
              return false;
            }     

        // Проверям на наличия ид если нет то создаем
            if(!v){
              $('.add-container-form').attr('data-addrent-id', 555);
              console.log('атррибут пустой');
              
            }else{
      // Если есть то обнавляем  таблице объявление
              console.log('атррибут есть');
            }


        console.log(isEmpty(v));
        console.log(v);
        
        $(".offer-group-type .type-block li button").removeClass('button-checked');
        $(this).addClass('button-checked');
      });

      //  Событие отвечает за нажатие кнопки для выбора типа и отправки его в запись
      $(".offer-group-category .type-block li button").click(function(e) {

        $(".offer-group-category .type-block li button").removeClass('button-checked');
        $(this).addClass('button-checked');
      });

  },
  imageUpload: function(){
    // var maxFileSize = 2 * 1024 * 1024; // (байт) Максимальный размер файла (2мб)
    // var queue = {};
    // var form = $('form#uploadImages');
    // var imagesList = $('#uploadImagesList');

    // var itemPreviewTemplate = imagesList.find('.item.template').clone();
    // itemPreviewTemplate.removeClass('template');
    // imagesList.find('.item.template').remove();

    // Фотографии


  },
  forImageFiles: function(files){
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
  
      if ( !file.type.match(/image\/(jpeg|jpg|png|gif)/) ) {
          alert( 'Фотография должна быть в формате jpg, png или gif' );
          continue;
      }
      console.log(site.Rent.maxFileSize);
  
      console.log(file.size);
      
      
      if ( file.size > site.Rent.maxFileSize ) {
          alert( 'Размер фотографии не должен превышать 2 Мб' );
          continue;
      }
  
      site.Rent.preview(files[i]);
    }
  
  this.value = '';
  },
  preview: function (file){
    // var itemPreviewTemplate = site.Rent.imagesList.find('.item.template').clone();
    //  itemPreviewTemplate.removeClass('template');
    //  site.Rent.imagesList.find('.item.template').remove();

    var reader = new FileReader();
    reader.addEventListener('load', function(event) {
      var itemPreviewTemplate = site.Rent.imagesList.find('.item.template').clone();
        var img = document.createElement('img');
  
        var itemPreview = itemPreviewTemplate.clone();
  
        itemPreview.find('.img-wrap img').attr('src', event.target.result);
        itemPreview.data('id', file.name);
  
        site.Rent.imagesList.append(itemPreview);
  
        site.Rent.queue[file.name] = file;
  
    });
    reader.readAsDataURL(file);
  }



};
$(function() {
	site.Rent.init();
});















});
