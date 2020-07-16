$(document).ready ( function(){


  // var topProfMenu = document.getElementById("topProfMenu");
  // var UserTopMinu = document.getElementById("UserTopMinu");
  // UserTopMinu.style.display ='none';
  //
  //  topProfMenu.onclick = function(e){
  // var UserTopMinu = document.getElementById("UserTopMinu");
  //
  //       if(UserTopMinu.style.display == 'flex'){
  //         UserTopMinu.style.display = 'none';
  //       }else if(UserTopMinu.style.display == 'none') {
  //         UserTopMinu.style.display = 'flex';
  //       }else {
  //       }
  //   //end onclick
  // }

  $('.popup-open').click(function() {
  		$('.popup-fade').fadeIn();
  		return false;
  	});

  	$('.popup-close').click(function() {
  		$(this).parents('.popup-fade').fadeOut();
  		return false;
  	});

  	$(document).keydown(function(e) {
  		if (e.keyCode === 27) {
  			e.stopPropagation();
  			$('.popup-fade').fadeOut();
  		}
  	});

  	$('.popup-fade').click(function(e) {
  		if ($(e.target).closest('.popup').length == 0) {
  			$(this).fadeOut();
  		}
  	});

    var vhodClic = document.getElementById("log-btn");
    vhodClic.onclick = function(){
      var msg   = $('.register-form .ser_login').serialize();
      $('.errors').empty();
    //  console.log(msg);
             $.ajax({
                   type: 'POST',
                   url: '/user/login',
                   data: msg,
                   success: function(data){

                  if(data == 'Неправильный email пользователя или пароль'){
                    $('.errors').append('<span>'+data+'</span>');
                  }else {
                    setTimeout('location.replace("/feed")',500);
                    console.log(data);
                  }

                   },
                   error:  function(xhr, str){
                   alert('Возникла ошибка: ' + xhr.responseCode);
                   }
             });
      //end vhodClic
    }

    var regClic = document.getElementById("reg-btn");
    regClic.onclick = function(){
      var msg   = $('.register-form .ser_login').serialize();
      $('.errors').empty();
    //  console.log(msg);
             $.ajax({
                   type: 'POST',
                   url: '/user/regist',
                   data: msg,
                   success: function(data){

                  //if(data == 'Неправильный email пользователя или пароль'){
                  //  $('.errors').append('<span>'+data+'</span>');
                //  }else {
                    //setTimeout('location.replace("/feed")',500);
                    console.log(data);
                  //}

                   },
                   error:  function(xhr, str){
                   alert('Возникла ошибка: ' + xhr.responseCode);
                   }
             });
      //end v
    }

    $('.link-reg-vos a:eq(1)').on('click', function() {
            $('.block_login').hide();
            $('.block_reg').show();
      });
      $('.regist_btn a:eq(1)').on('click', function() {
              $('.block_reg').hide();
              $('.block_login').show();
        });


});
