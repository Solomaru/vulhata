document.addEventListener('DOMContentLoaded', function() {


var butUpDown = document.getElementsByClassName("but-up-down")[0];
var cont = document.getElementsByClassName("cont-class-block")[0];
var blockUpDown = document.getElementById("blockUpDown");
butUpDown.onclick = function(e){
  var cont = document.getElementsByClassName("cont-class-block")[0];
  if(cont == undefined){
    butUpDown.innerText = 'Посмотреть всю комплектацию';
   blockUpDown.classList.add("cont-class-block");
//  blockUpDown.setAttribute('class', 'cont-class-block');
  }else {
    butUpDown.innerText = 'Скрыть комплектацию';
    cont.classList.remove("cont-class-block");
  }

}

// end DOMContentLoaded
}, false);
