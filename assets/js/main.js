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

   $('#topProfMenu').on('click', function(){
  //   $('#UserTopMinu').slideToggle(300).css('display','flex');
        $('.minuUserTop').slideToggle(300).css('display','flex');
 });


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





});
