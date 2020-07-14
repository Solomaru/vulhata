document.addEventListener('DOMContentLoaded', function() {

/// запрещаем удалять
var redactor = document.getElementById("PosterRedactor");
redactor.onkeyup = function(e){
    if(e.keyCode == 8){
      console.log(redactor.querySelectorAll('p'));
          if(redactor.querySelectorAll('p').length == 0){
            var p = document.createElement("p");
            // p.setAttribute("class", "selected");
            p.innerHTML = '<br>';
            redactor.appendChild(p);
          }
     }
  }
//Отменяем форматирование при вставке кода
document.querySelector('div[contenteditable="true"]').addEventListener("paste", function(e) {
          e.preventDefault();
          var text = e.clipboardData.getData("text/plain");
          document.execCommand("insertHTML", false, text);
            console.log(text);
});

// model okno
var modal = document.getElementById('myModal');
var btn = document.getElementById("imgBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function(){
  modal.style.display = "block";
}
span.onclick = function(){
  modal.style.display = "none";
}
window.onclick = function(e){
  if(e.target == modal){
    modal.style.display = "none";
  }
}
// end model okno

//Добавление изображение старт

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
      modal.style.display = "none";
});
//загрузка через кнопку
  $("#file-input").change(function() {
     // выводим объект FileLis
     createImg(this.files[0]);
     // Очищаем инпут файл путем сброса формы
      $('#frm').each(function(){
              this.reset();
      });
        modal.style.display = "none";
});

function createImg(image){
console.log(image);
var reader = new FileReader();
reader.onload = function(event) {
      // console.log(event.target);
      var dataUri = event.target.result;
      var nameImg = image.name;
// if(a.length == 1){
//
//   // console.log();
//   // console.log();
//         if(a[0].naturalWidth > a[0].naturalHeight){
//           a[0].style.width = 530 + 'px';
//           a[0].style.height = 370 + 'px';
//         }else {
//           a[0].style.width = 330 + 'px';
//           a[0].style.height = 470 + 'px';
//         }
//
//
// }else {
//
// }
  var contimage = document.getElementById("conteiner-image");
  var imagionload = contimage.querySelectorAll('img');
      $.post('/handler/fotosave',
      //{ids: JSON.stringify(dataUri)},
      {ids: dataUri, name: nameImg},
       function(data) {
         data = $.parseJSON(data);
         console.log(data);
         console.log(imagionload);


         var contimage = document.getElementById("conteiner-image");
         contimage.style.display = "block";
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

           // var classList = document.getElementsByClassName("fo_image");
           // var imgone = imagionload[0];
           // var count = imagionload.length + 1;
           // console.log(classList);
           // var res = classList.length;
           //
           //
           // if(res == 1){
           //   for(var i = 0; i < res; i++){
           //        if(classList[i].clientWidth > classList[i].clientHeight){
           //            classList[i].style.width = 510 + 'px';
           //            classList[i].style.height =  360  + 'px';
           //        }
           //        if(classList[i].clientWidth < classList[i].clientHeight){
           //            classList[i].style.width =  340  + 'px';
           //            classList[i].style.height = 480  + 'px';
           //        }
           //   }
           // }




          // var divCont = document.createElement("div");
          // divCont.setAttribute("class","content_image");
          // divCont.appendChild(img);

          // img.setAttribute("class", "image_cont");







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
var contimage = document.getElementById("conteiner-image");

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

// save POST

var butKnop = document.getElementById("butSave");
butKnop.onclick = function(){
  var redactorDiv = document.getElementById("PosterRedactor");
  var classList = document.getElementsByClassName("fo_image");
  var arrImg = [];
   for(var i=0; i < classList.length; i++){
     arrImg[i]= classList[i].src;
   }

   var innertext = redactorDiv.innerText;
   var innerhtml = redactorDiv.innerHTML;
   // console.log(innerhtml.length);
   // console.log(innertext.length);

   $.post('/feed',
   //{ids: JSON.stringify(dataUri)},
   {innerhtml: innerhtml,innertext:innertext, arrimag: arrImg},
    function(data) {

      cleanEdit(data);

    });
//end onclick
}
 function cleanEdit(a){
   var redactorDiv = document.getElementById("PosterRedactor");
      if(a == 1){
          var imDel = document.getElementById("conteiner-image");
          imDel.innerHTML = '';
          imDel.style.display = 'none';
          redactorDiv.innerHTML = '<p><br></p>';
      }
 }


// end DOMContentLoaded
}, false);
