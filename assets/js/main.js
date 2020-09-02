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
$(document).ready(function () {
  var site = {};
  $('#topProfMenu').on('click', function () {
    //   $('#UserTopMinu').slideToggle(300).css('display','flex');
    $('.minuUserTop').slideToggle(300).css('display', 'flex');
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
  $("#drop-area").on('dragenter', function (e) {
    e.preventDefault();
    $(this).css('background', '#eeeeee');
  });

  $("#drop-area").on('dragover', function (e) {
    e.preventDefault();
  });

  // загрузка при перетаскивание
  $("#drop-area").on('drop', function (e) {
    $(this).css('background', '#eee');
    e.preventDefault();

    var image = e.originalEvent.dataTransfer.files;
    //createFormData(image);
    forImageFiles(image);
  });

  //загрузка через кнопку
  $("#file-input").change(function () {
    // выводим объект FileLis
    // createFormData(this.files);
    forImageFiles(this.files);
    // Очищаем инпут файл путем сброса формы
    $('#frm').each(function () {
      this.reset();
    });

  });


  function forImageFiles(files) {


    for (var i = 0; i < files.length; i++) {
      var file = files[i];

      if (!file.type.match(/image\/(jpeg|jpg|png|gif)/)) {
        alert('Фотография должна быть в формате jpg, png или gif');
        continue;
      }

      if (file.size > maxFileSize) {
        alert('Размер фотографии не должен превышать 2 Мб');
        continue;
      }
      if (file.size > maxFileSize) {
        alert('Размер фотографии не должен превышать 2 Мб');
        continue;
      }
      console.log(i);

      if (i == 5) {
        alert('Максимальная количество фотографий 5');
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
    reader.addEventListener('load', function (event) {
      var img = document.createElement('img');

      var itemPreview = itemPreviewTemplate.clone();

      itemPreview.find('.img-wrap img').attr('src', event.target.result);
      itemPreview.data('id', file.name);

      imagesList.append(itemPreview);

      queue[file.name] = file;

    });
    reader.readAsDataURL(file);
  }



  var rub = '₽ ';
 // $(".decimal").mask("9 999" +rub);
  $("#decimal").inputmask( "9999[.999]" + rub);
  $('#phone').inputmask("+9-(999)-999-99-99");
  // $(".input-price input").inputmask({"mask": "(999) 999-9999"}); //specifying options
   //$(".input-price input").mask("(999) 999-9999", {autoclear: false});
   //$(".input-price input").inputmask({"mask": "(999) 999-9999"}); //specifying options

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

function formatNumber(n) {
  // format number 1000000 to 1 234 567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, " ")
}

function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    // if (blur === "blur") {
    //   right_side += "00";
    // }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = rub + left_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = rub + input_val;
    
    // final formatting
    // if (blur === "blur") {
    //   input_val += ".00";
    // }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
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
    init: function () {
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
    eventButton: function () {

      //  Событие отвечает за нажатие кнопки для создание объявление и выдора категории
      $(".offer-group-type .type-block li button").click(function (e) {

        var v = $('.add-container-form').attr('data-addrent-id');

        function isEmpty(v) {
          if (v.trim() == '')
            return true;

          return false;
        }

        // Проверям на наличия ид если нет то создаем
        if (!v) {
          $('.add-container-form').attr('data-addrent-id', 555);
          console.log('атррибут пустой');

        } else {
          // Если есть то обнавляем  таблице объявление
          console.log('атррибут есть');
        }


        console.log(isEmpty(v));
        console.log(v);

        $(".offer-group-type .type-block li button").removeClass('button-checked');
        $(this).addClass('button-checked');
      });

      //  Событие отвечает за нажатие кнопки для выбора типа и отправки его в запись
      $(".offer-group-category .type-block li button").click(function (e) {

        $(".offer-group-category .type-block li button").removeClass('button-checked');
        $(this).addClass('button-checked');
      });

    },
    imageUpload: function () {
      // var maxFileSize = 2 * 1024 * 1024; // (байт) Максимальный размер файла (2мб)
      // var queue = {};
      // var form = $('form#uploadImages');
      // var imagesList = $('#uploadImagesList');

      // var itemPreviewTemplate = imagesList.find('.item.template').clone();
      // itemPreviewTemplate.removeClass('template');
      // imagesList.find('.item.template').remove();

      // Фотографии


    },
    forImageFiles: function (files) {
      for (var i = 0; i < files.length; i++) {
        var file = files[i];

        if (!file.type.match(/image\/(jpeg|jpg|png|gif)/)) {
          alert('Фотография должна быть в формате jpg, png или gif');
          continue;
        }
        console.log(site.Rent.maxFileSize);

        console.log(file.size);


        if (file.size > site.Rent.maxFileSize) {
          alert('Размер фотографии не должен превышать 2 Мб');
          continue;
        }

        site.Rent.preview(files[i]);
      }

      this.value = '';
    },
    preview: function (file) {
      // var itemPreviewTemplate = site.Rent.imagesList.find('.item.template').clone();
      //  itemPreviewTemplate.removeClass('template');
      //  site.Rent.imagesList.find('.item.template').remove();

      var reader = new FileReader();
      reader.addEventListener('load', function (event) {
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
  $(function () {
    site.Rent.init();
  });















});