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





});
