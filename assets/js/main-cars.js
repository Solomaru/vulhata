document.addEventListener('DOMContentLoaded', function(){

//but marka
var but_marka_filter = document.getElementsByClassName("but-marka-filter")[0];
but_marka_filter.onclick = function(e){
var markaDiv = document.getElementById("markaDiv");
    if(markaDiv.classList.contains('focus-select')){
       markaDiv.classList.remove('focus-select');
    }else {
       markaDiv.classList.add('focus-select');
    }
}
//but model
var but_model_filter = document.getElementsByClassName("but-model-filter")[0];
but_model_filter.onclick = function(e){
var markaDiv = document.getElementById("modelDiv");
    if(markaDiv.classList.contains('focus-select')){
      markaDiv.classList.remove('focus-select');
    }else {
      markaDiv.classList.add('focus-select');
    }
}
function butFilter(but, block){
  var filter = document.getElementsByClassName(but)[0];
  filter.onclick = function(e){
  var blocDiv = document.getElementById(block);
      if(blocDiv.classList.contains('focus-select')){
        blocDiv.classList.remove('focus-select');
      }else {
        blocDiv.classList.add('focus-select');
      }
  }
//end funciton
}
butFilter("but-cuzov-filter", "cuzovDiv");
butFilter("but-kpp-filter", "kppDiv");
butFilter('but-dvig-filter', "dvigDiv");
butFilter('but-priv-filter', 'privDiv');
butFilter("but-god-from-filter",'godfromDiv');
butFilter("but-god-to-filter", "godtoDiv");

//  end but div focus select
var butMarkFilt = document.getElementsByClassName("butMarkFilt");
for(var i = 0; i<butMarkFilt.length;i++){
  butMarkFilt[i].onclick = function(e){
    var removeC = document.getElementsByClassName('aktiv-marka');
    if(removeC.length > 0){
      removeC[0].classList.remove('aktiv-marka');
      e.target.classList.add('aktiv-marka');
      markaDiv.classList.remove('focus-select');
      but_marka_filter.innerHTML = e.target.innerHTML;

    }else {
      e.target.classList.add('aktiv-marka');
      markaDiv.classList.remove('focus-select');
      but_marka_filter.innerHTML = e.target.innerHTML;
    }

      var but_v = document.getElementsByClassName('aktiv-marka')[0];
      var data_id_market = but_v.dataset.markaid;
      console.log(data_id_market);
      $.post('/handler/modelid',
      {model_id: data_id_market},
       function(data){

         data = $.parseJSON(data);
         console.log(data);


         var model = document.getElementById("modelDiv");
         model.innerHTML = '<div class="butModelFilt classAf aktiv-model"  data-clear ="true">Выбрать модель</div><hr>'
         // model.parentNode.removeChild(model);
         // model = document.createElement('ul');
         // model.setAttribute("class","model-cars");
         for(c = 0; c < data.length; c++){
           modelDiv = document.getElementById("modelDiv");

           var div = document.createElement('div');
           div.setAttribute("class","butModelFilt");
           div.setAttribute("data-modelid", data[c]['id']);
           div.innerHTML = data[c]['model'];
           modelDiv.appendChild(div);
         }

         var butModelFilt = document.getElementsByClassName("butModelFilt");
          console.log(butModelFilt);
         for (var i = 0; i < butModelFilt.length; i++) {
           butModelFilt[i].onclick = function(e){
             console.log(butModelFilt);
             var removeC = document.getElementsByClassName('aktiv-model');
             var modelDiv = document.getElementById("modelDiv");
             if(removeC.length > 0){
               removeC[0].classList.remove('aktiv-model');
               e.target.classList.add('aktiv-model');
               but_model_filter.innerHTML = e.target.innerHTML;
               modelDiv.classList.remove('focus-select');
               console.log();
             }else {
               e.target.classList.add('aktiv-model');
               modelDiv.classList.remove('focus-select');
               but_model_filter.innerHTML = e.target.innerHTML;
               console.log(modelDiv);
             }

           }
         }
         /// end ajax
        });

  ///end onklick
  }
//end for
}
// end marka i modelid
var butCuzovFilt = document.getElementsByClassName("butCuzovFilt");
for (var i = 0; i < butCuzovFilt.length; i++) {
  butCuzovFilt[i].onclick = function(e){
      var removeC = document.getElementsByClassName('aktiv-cuzov');
      var but_cuzov_filter = document.getElementsByClassName("but-cuzov-filter")[0];
      if(removeC.length > 0){
            removeC[0].classList.remove('aktiv-cuzov');
            e.target.classList.add('aktiv-cuzov');
            cuzovDiv.classList.remove('focus-select');
            but_cuzov_filter.innerHTML = e.target.innerHTML;
      }else {
            e.target.classList.add('aktiv-cuzov');
            cuzovDiv.classList.remove('focus-select');
            but_cuzov_filter.innerHTML = e.target.innerHTML;
      }
  //end onclick
  }
// end for
}
var butKppFilt = document.getElementsByClassName("butKppFilt");
for (var i = 0; i < butKppFilt.length; i++) {
  butKppFilt[i].onclick = function(e){
      var removeC = document.getElementsByClassName('aktiv-kpp');
      var but_kpp_filter = document.getElementsByClassName("but-kpp-filter")[0];
      if(removeC.length > 0){
            removeC[0].classList.remove('aktiv-kpp');
            e.target.classList.add('aktiv-kpp');
            kppDiv.classList.remove('focus-select');
            var id_kpp = e.target.getAttribute('data-kppid');
            if(id_kpp){
                but_kpp_filter.innerHTML = 'К-('+ e.target.getAttribute('data-kppid')+ ')';
            }else {
                but_kpp_filter.innerHTML =  e.target.innerHTML;
            }

      }else {
            e.target.classList.add('aktiv-kpp');
            kppDiv.classList.remove('focus-select');
            var id_kpp = e.target.getAttribute('data-kppid');
            if(id_kpp){
                but_kpp_filter.innerHTML = 'К-('+ e.target.getAttribute('data-kppid')+ ')';
            }else {
                but_kpp_filter.innerHTML =  e.target.innerHTML;
            }
      }
  //end onclick
  }
//end for
}
var butDvigFilt = document.getElementsByClassName("butDvigFilt");
for (var i = 0; i < butDvigFilt.length; i++) {
  butDvigFilt[i].onclick = function(e){
      var removeC = document.getElementsByClassName('aktiv-dvig');
      var but_dvig_filter = document.getElementsByClassName("but-dvig-filter")[0];
      if(removeC.length > 0){
            removeC[0].classList.remove('aktiv-dvig');
            e.target.classList.add('aktiv-dvig');
            dvigDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-dvigid')){
                but_dvig_filter.innerHTML = 'Двигат-('+ e.target.getAttribute('data-dvigid')+ ')';
            }else {
                but_dvig_filter.innerHTML =  e.target.innerHTML;
            }

      }else {
            e.target.classList.add('aktiv-dvig');
            dvigDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-dvigid')){
                but_dvig_filter.innerHTML = 'Двигат-('+ e.target.getAttribute('data-dvigid')+ ')';
            }else {
                but_dvig_filter.innerHTML =  e.target.innerHTML;
            }
      }
  //end onclick
  }
//end for
}

var butPrivFilt = document.getElementsByClassName("butPrivFilt");
for (var i = 0; i < butPrivFilt.length; i++) {
  butPrivFilt[i].onclick = function(e){
      var removeC = document.getElementsByClassName('aktiv-priv');
      var but_priv_filter = document.getElementsByClassName("but-priv-filter")[0];
      if(removeC.length > 0){
            removeC[0].classList.remove('aktiv-priv');
            e.target.classList.add('aktiv-priv');
            var privDiv = document.getElementById('privDiv');
            privDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-privodid')){
                but_priv_filter.innerHTML = 'Прив-('+ e.target.getAttribute('data-privodid')+ ')';
            }else {
                but_priv_filter.innerHTML =  e.target.innerHTML;
            }

      }else {
            e.target.classList.add('aktiv-priv');
            var privDiv = document.getElementById('privDiv');
            privDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-privodid')){
                but_priv_filter.innerHTML = 'Прив-('+ e.target.getAttribute('data-privodid')+ ')';
            }else {
                but_priv_filter.innerHTML =  e.target.innerHTML;
            }
      }
  //end onclick
  }
//end for
}

var butGodFromFilt = document.getElementsByClassName("butGodFromFilt");
for (var i = 0; i < butGodFromFilt.length; i++) {
  butGodFromFilt[i].onclick = function(e){
      var removeC = document.getElementsByClassName('aktiv-godfrom');
      var but_god_from_filter = document.getElementsByClassName("but-god-from-filter")[0];
      var godfromDiv = document.getElementById('godfromDiv');
      if(removeC.length > 0){
            removeC[0].classList.remove('aktiv-godfrom');
            e.target.classList.add('aktiv-godfrom');
            godfromDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-god-from')){
                but_god_from_filter.innerHTML = e.target.getAttribute('data-god-from')+ ' г';
            }else {
                but_god_from_filter.innerHTML =  e.target.innerHTML;
            }

      }else {
            e.target.classList.add('aktiv-godfrom');
            godfromDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-god-from')){
                but_god_from_filter.innerHTML = e.target.getAttribute('data-god-from') + ' г';
            }else {
                but_god_from_filter.innerHTML =  e.target.innerHTML;
            }
      }
  //end onclick
  }
//end for
}

var butGodToFilt = document.getElementsByClassName("butGodToFilt");
for (var i = 0; i < butGodToFilt.length; i++) {
  butGodToFilt[i].onclick = function(e){
      var removeC = document.getElementsByClassName('aktiv-godto');
      var but_god_to_filter = document.getElementsByClassName("but-god-to-filter")[0];
      var godtoDiv = document.getElementById('godtoDiv');
      if(removeC.length > 0){
            removeC[0].classList.remove('aktiv-godto');
            e.target.classList.add('aktiv-godto');
            godtoDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-god-to')){
                but_god_to_filter.innerHTML = e.target.getAttribute('data-god-to')+ ' г';
            }else {
                but_god_to_filter.innerHTML =  e.target.innerHTML;
            }

      }else {
            e.target.classList.add('aktiv-godto');
            godtoDiv.classList.remove('focus-select');
            if(e.target.getAttribute('data-god-to')){
                but_god_to_filter.innerHTML = e.target.getAttribute('data-god-to') + ' г';
            }else {
                but_god_to_filter.innerHTML =  e.target.innerHTML;
            }
      }
  //end onclick
  }
//end for
}



//дастаем фильтры и делаем урл
var arrUrlName = [];
var arrUrlValue = [];

var but_save_filtr = document.getElementById("but-save-filtr");
but_save_filtr.onclick = function(){
var urlSave = "";
        function uploudData(classAktiv, idData){
          var aktiv = document.getElementsByClassName('aktiv-'+classAktiv)[0];
          console.log(aktiv);
              if (aktiv.getAttribute('data-clear') === true ) {
                return null;
              } else {
                return aktiv.getAttribute(idData);
              }
        //end function
        }
      arrUrlName[0] = 'marka';
      arrUrlValue[0] =  uploudData('marka','data-markaid' );
      arrUrlName[1] = 'model';
      arrUrlValue[1] =  uploudData('model','data-modelid' );
      arrUrlName[2] = 'cuzov';
      arrUrlValue[2] =  uploudData('cuzov','data-cuzovid' );
      arrUrlName[3] = 'price_from';
      arrUrlValue[3] = document.getElementsByClassName("input-from-price")[0].value;
      arrUrlName[4] = 'price_to';
      arrUrlValue[4] = document.getElementsByClassName("input-to-price")[0].value;
      arrUrlName[5] = 'probeg_from';
      arrUrlValue[5] = document.getElementsByClassName("input-from-probeg")[0].value;
      arrUrlName[6] = 'probeg_to';
      arrUrlValue[6] = document.getElementsByClassName("input-to-probeg")[0].value;
      arrUrlName[7] = 'kpp';
      arrUrlValue[7] =  uploudData('kpp','data-kppid' );
      arrUrlName[8] = 'dvig';
      arrUrlValue[8] =  uploudData('dvig','data-dvigid');
      arrUrlName[9] = 'priv';
      arrUrlValue[9] =  uploudData('priv','data-privodid');
      arrUrlName[10] = 'godfrom';
      arrUrlValue[10] =  uploudData('godfrom','data-god-from');
      arrUrlName[11] = 'godto';
      arrUrlValue[11] =  uploudData('godto','data-god-to');

      // var foto = document.getElementsByName("s_image")[0];
      //     if(foto.checked){
      //       arrUrlName[12] = 'foto';
      //       arrUrlValue[12] = 1;
      //     }else {
      //       arrUrlName[12] = 'foto';
      //       arrUrlValue[12] = null;
      //     }

          for (var i = 0; i < arrUrlName.length; i++) {
            if(!arrUrlValue[i] == null || !arrUrlValue[i] == undefined || !arrUrlValue[i] == ""){
                urlSave += '&' + arrUrlName[i] + '=' + arrUrlValue[i];
            }else {
              console.log('pustoi massiv');
            }
          }
          setTimeout('location.replace("/cars/?search_go=1'+urlSave +'")',10);
           //console.log(arrUrl);
           console.log(urlSave);
//end save
}


// end DOMContentLoaded
}, false);
