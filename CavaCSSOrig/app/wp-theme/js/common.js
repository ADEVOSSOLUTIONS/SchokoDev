$(function() {
	// new WOW().init();


	var loc = window.location.hash.replace("#","");
	if (loc == "product") {
	  var _src = $('.video-inside iframe').attr('src') + "&autoplay=1";
	  $('.video-inside iframe').attr('src', _src);      
	}  

	$( "#city" ).on( "selectmenuchange", function(event, ui){
		// $('html,body').stop().animate({ scrollTop: $('#contact').offset().top-_stick_menu_height }, 1000);
		$('.popup').fadeOut('400');        
	}); 

	function showPopup() {
		$('#popup-1').fadeIn('fast');
	}


	console.log('cookie: '+$.cookie("modal_shown"));
	if ($.cookie("modal_shown") == null) {
		setTimeout(showPopup, 10000);  

	    var _city = null;
	    var _city_object = $('.pop-city-detect');
	    if(_city_object.hasClass('_msk')){
	    	_city='msk';
	    	console.log(_city);
	    	$.cookie('modal_shown', 'msk', { expires: 365, path: '/' });
	    }
	    if(_city_object.hasClass('_izh')){
			_city='izh';
	    	console.log(_city);
	    	$.cookie('modal_shown', 'izh', { expires: 365, path: '/' });	    	
	    }
		if(_city_object.hasClass('_kaz')){
			_city='kaz';
	    	console.log(_city);
	    	$.cookie('modal_shown', 'kaz', { expires: 365, path: '/' });	    	
	    }	    
	}
	if($.cookie("modal_shown") == 'msk'){
		$('.map-block').hide();
        $('.mb-m').show();		
	}
	if($.cookie("modal_shown") == 'izh'){
		$('.map-block').hide();
        $('.mb-i').show();		
	}	
	if($.cookie("modal_shown") == 'kaz'){
		$('.map-block').hide();
        $('.mb-k').show();		
	}
		
	$('.contacts-page .map-block').show();
	$('.burger').click(function(event) {
		$('.header-open-menu').show('fast');
	});
	$('.burger-open').click(function(event) {
		$('.header-open-menu').slideUp('fast');
	});
	$('.popup').hide().css('visibility', 'visible');

	var _vznos = 300000;
	var _cost = 1500000;
	var _years = 1;

	function Solve(_input1,_input2,_input3){
		var _credit = 0;
		var _stavka = 10.5;
		var _stavkaP = 12.5;
		var _EP = 0;
		var _VP = 0;
		var _PB = 0;
		var _economy = 0;

		_credit = _input2-_input1;
		_sp = 388;
	    _years = _input3;
		

		_EPm = (_stavka/100)/(12);
	    _month = 12*_years;
	    _EP1 = (1+_EPm);
	    _EP1a = _EP1;
	    _EP2 = Math.pow(_EP1,_month);
	    _EP3 = (_EP2) - 1;
	    _EP4 = _EPm/_EP3;
	    _EP5 = _EPm+_EP4;
	    _EP6 = _credit*_EP5;
	    _EP = _EP6;

		_VP = (_EP*_years*12)-_credit;
		_PBm = (_stavkaP/100)/(12);
   		_PB = (_credit*(_PBm+((_PBm)/((Math.pow((1+_PBm),(12*_years)))-1))));
		_PBp = (_PB*_years*12)-_credit;

		_economy = (_PBp-_VP)+(10000*_years);

		$('._credit').text(_credit.toLocaleString());
		$('._month_pay').text(_EP.toFixed().toLocaleString());
		$('._overpay').text(_VP.toFixed().toLocaleString());
		$('._economy').text(_economy.toFixed().toLocaleString());
	}	

	Solve(_vznos,_cost,_years);
	function SolvePercents(_summa,_epv){
		var result = 0;

		return result;
	}

	$('.calculator-range input').focusin(function(event) {
		var _input_value = $(this).val();
		$(this).val(parseInt(_input_value.replace(/\s/g, '')));
	});

	$(".calculator-range input").keyup(function(event){
	    if(event.keyCode == 13){
	       	$(this).blur();
	    }
	});

	$('.calculator-range input').keypress(function(e) {
	    var verified = (e.which == 8 || e.which == undefined || e.which == 0) ? null : String.fromCharCode(e.which).match(/[^0-9]/);
	    if (verified) {
	    e.preventDefault();
	    }
	  });

	$('.calculator-range1 input').focusout(function(event) {
		var _inp1_val = parseInt($(this).val().replace(/\s/g, ''));
		var _inp1_min = $( ".calculator-range1 .calc-range-slider" ).slider("option", "min");
		var _inp1_max = $( ".calculator-range1 .calc-range-slider" ).slider("option",'max');
		if(_inp1_val>=_inp1_min){
			$( ".calculator-range1 .calc-range-slider" ).slider({value : _inp1_val});	
		}
		else{
			_inp1_val = _inp1_min;
		}
		if(_inp1_val<=_inp1_max){
			$( ".calculator-range1 .calc-range-slider" ).slider({value : _inp1_val});
		}
		else{
			_inp1_val = _inp1_max;
		}
		_vznos = _inp1_val;
		Solve(_vznos,_cost,_years);		
		$(this).val(_inp1_val.toLocaleString() + " руб");			
	});

	$('.calculator-range2 input').focusout(function(event) {
		var _inp2_val = parseInt($(this).val().replace(/\s/g, ''));
		var _inp2_min = $( ".calculator-range2 .calc-range-slider" ).slider("option", "min");
		var _inp2_max = $( ".calculator-range2 .calc-range-slider" ).slider("option",'max');
		if(_inp2_val>=_inp2_min){
			$( ".calculator-range2 .calc-range-slider" ).slider({value : _inp2_val});	
		}
		else{
			_inp2_val = _inp2_min;
		}
		if(_inp2_val<=_inp2_max){
			$( ".calculator-range2 .calc-range-slider" ).slider({value : _inp2_val});
		}
		else{
			_inp2_val = _inp2_max;
		}
		_cost = _inp2_val;
		Solve(_vznos,_cost,_years);		
		$(this).val(_inp2_val.toLocaleString() + " руб");			
	});	

	$('.calculator-range3 input').focusout(function(event) {
		var _inp3_val = parseInt($(this).val().replace(/\s/g, ''));
		var _inp3_min = $( ".calculator-range3 .calc-range-slider" ).slider("option", "min");
		var _inp3_max = $( ".calculator-range3 .calc-range-slider" ).slider("option",'max');
		if(_inp3_val>=_inp3_min){
			$( ".calculator-range3 .calc-range-slider" ).slider({value : _inp3_val});	
		}
		else{
			_inp3_val = _inp3_min;
		}
		if(_inp3_val<=_inp3_max){
			$( ".calculator-range3 .calc-range-slider" ).slider({value : _inp3_val});
		}
		else{
			_inp3_val = _inp3_max;
		}
		_years = _inp3_val;
		Solve(_vznos,_cost,_years);			
		if(_inp3_val==1||_inp3_val==21){
			$(this).val(_inp3_val.toLocaleString() + " год");
		}
		if(_inp3_val>1&_inp3_val<5||_inp3_val>21&_inp3_val<25){
			$(this).val(_inp3_val.toLocaleString() + " года");
		}
		if(_inp3_val>=5&_inp3_val<=20||_inp3_val==25){
			$(this).val(_inp3_val.toLocaleString() + " лет");
		}		
	});		


	$( ".calculator-range1 .calc-range-slider" ).slider({
   		range: "min",
		value : 300000,//Значение, которое будет выставлено слайдеру при загрузке
 		min : 300000,//Минимально возможное значение на ползунке
		max : 3000000,//Максимально возможное значение на ползунке
		step : 100000,//Шаг, с которым будет двигаться ползунок
		create: function( event, ui ) {
		val = $( ".calculator-range1 .calc-range-slider" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
		$( ".calculator-range1 input" ).val( val.toLocaleString() + " руб");//Заполняем этим значением элемент с id contentSlider
 		},
		slide: function( event, ui ) {
  			$( ".calculator-range1 input" ).val( ui.value.toLocaleString() + " руб" );//При изменении значения ползунка заполняем элемент с id contentSlider
            _vznos = ui.value;
            console.log("Взнос: " + _vznos);
            Solve(_vznos,_cost,_years);
            }
    });

	$( ".calculator-range2 .calc-range-slider" ).slider({
   		range: "min",
		value : 1500000,//Значение, которое будет выставлено слайдеру при загрузке
 		min : 1500000,//Минимально возможное значение на ползунке
		max : 20000000,//Максимально возможное значение на ползунке
		step : 500000,//Шаг, с которым будет двигаться ползунок
		create: function( event, ui ) {
		val = $( ".calculator-range2 .calc-range-slider" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
		$( ".calculator-range2 input" ).val( val.toLocaleString() + " руб");//Заполняем этим значением элемент с id contentSlider
 		},
		slide: function( event, ui ) {
  			$( ".calculator-range2 input" ).val( ui.value.toLocaleString() + " руб" );//При изменении значения ползунка заполняем элемент с id contentSlider
			_cost = ui.value;
            console.log("Стоимость: " + _cost);
            Solve(_vznos,_cost,_years);        	
        }
    });		

	$( ".calculator-range3 .calc-range-slider" ).slider({
   		range: "min",
		value : 1,//Значение, которое будет выставлено слайдеру при загрузке
 		min : 1,//Минимально возможное значение на ползунке
		max : 25,//Максимально возможное значение на ползунке
		step : 1,//Шаг, с которым будет двигаться ползунок
		create: function( event, ui ) {
			val = $( ".calculator-range3 .calc-range-slider" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
			if(val==1||val==21){
				$( ".calculator-range3 input" ).val( val.toLocaleString()+' год');
			}
			if(val>1&val<5||val>21&val<25){
				$( ".calculator-range3 input" ).val( val.toLocaleString()+' года');
			}
			if(val>=5&val<=20||val==25){
				$( ".calculator-range3 input" ).val( val.toLocaleString()+' лет');
			}							
			//Заполняем этим значением элемент с id contentSlider
 		},
		slide: function( event, ui ) {
			var uival = ui.value;
  			if(uival==1||uival==21){
				$( ".calculator-range3 input" ).val( ui.value.toLocaleString()+' год');
			}
			if(uival>1&uival<5||uival>21&uival<25){
				$( ".calculator-range3 input" ).val( ui.value.toLocaleString()+' года');
			}
			if(uival>=5&uival<=20||uival==25){
				$( ".calculator-range3 input" ).val( ui.value.toLocaleString()+' лет');
			}
			_years = ui.value;
            console.log("Лет: " + _years); 	
             Solve(_vznos,_cost,_years);		
		}			
    });		


	$('.block2').click(function(event) {
    var player = document.getElementById('ytvideo');
    player.stopVideo();
  });



	$( "#city" ).selectmenu({
    change: function( event, ui ) {
      
      var _location = ui.item.value;
      console.log(_location);
      if(_location=='m'){
      	$.cookie('modal_shown', 'msk', { expires: 365, path: '/' });
        $('.map-block').hide();
        $('.mb-m').show();
      }
      if(_location=='i'){
      	$.cookie('modal_shown', 'izh', { expires: 365, path: '/' });
        $('.map-block').hide();
        $('.mb-i').show();
      }
      if(_location=='k'){
      	$.cookie('modal_shown', 'kaz', { expires: 365, path: '/' });
        $('.map-block').hide();
        $('.mb-k').show();
      }
      // clearInterval(_interval);
      $('.popup').fadeOut('400'); 
        
    }
  });

	$('.inner-slider ul').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear',
	});

  function nextSlide(){
    var _index_a = 0;
    
    $('.about-slider-dots li').each(function(index, el) {
      if($(this).hasClass('about-slider-active')){
        _index_a = index;
      }
    });
    
    var _length = $('.about-slider-dots li').length;
    
    if(_index_a<_length-1){
     _index_a++;
    }
    else{
      _index_a = 0;
    }

    $('.about-slider-dots li').removeClass('about-slider-active');
    $('.slider-about-content li').slideUp(800);
    $('.about-slider-dots li').eq(_index_a).addClass('about-slider-active');
    $('.slider-about-content li').eq(_index_a).slideDown(800).find('.header-block').css('background-position', 'center top');
 
  }

  var _interval = setInterval(nextSlide,5000);  



	$('.about-slider-dots li').click(function(event) {
		var _index = $(this).index();
		$('.about-slider-dots li').removeClass('about-slider-active');
		$('.slider-about-content li').slideUp(1000);
		$('.slider-about-content li').eq(_index).slideDown('1000').find('.header-block').css('background-position', 'center top');;
		$(this).addClass('about-slider-active');
		$('html,body').stop().animate({ scrollTop: 0 }, 1000);
	  clearInterval(_interval);
  });

  



	$('.faq .show-ask-button').click(function() {
		var _text = $(this).text();
		if(_text=="Ответ"){
			$(this).text('Скрыть');
		}
		else{
			$(this).text('Ответ');

		}
		$(this).parent().find('h5').slideToggle('fast');
	});

	$(window).scroll(function(){
	      if ($(this).scrollTop() > 1068) {
	      	$('.fixed-menu').css('top', '0');
          $('#to-top').css('bottom', '30px');
	      } else {
	        $('.fixed-menu').css('top', '-105px');
          $('#to-top').css('bottom', '-80px');
	      }
	});


    $('.header-block').scroolly([
        {
	        to: 'el-bottom = vp-top',
	        cssFrom: {
	           'background-position': 'center 0px'
	        },
	        cssTo: {
	           'background-position': 'center -100%'
	        },
	    },
	    {
	        from: 'el-center = vp-top',
	        to: 'el-bottom = vp-top',
	        cssFrom: {
	        },
	        cssTo: {
	        }
	    }         
    ]);
    

    $('button.flat-button').click(function(event) {
      var _src = $('.video-inside iframe').attr('src') + "&autoplay=1";
	    $('html,body').stop().animate({ scrollTop: $('#product').offset().top-70 }, 1000);
	   $('.video-inside iframe').attr('src', _src);
    });
    $('#to-top').click(function(event) {
      $('html,body').stop().animate({ scrollTop: 0 }, 1000);
    });    
	

	$('.close').click(function(event) {
     $('.popup').fadeOut('fast', function() {

     });
	});
	$('.mobile-burger').click(function(event) {
		$('.header-mobile-menu').show('400', function() {
			
		});
	});
	$('.mobile-burger-open').click(function(event) {
		$('.mobile-menu').hide('400', function() {
			
		});
	});   
	$('.fixed-menu li a,.anchors-menu li a,.menu-right-section li a').on('click', function(e){
	    var _stick_menu_height = 70;
	    e.preventDefault();
	    var _anchor = $(this).attr('href');
		$('.mobile-menu').hide('400', function() {
			
		});

	    $('html,body').stop().animate({ scrollTop: $(_anchor).offset().top-_stick_menu_height }, 1000);
      if(_anchor=='#product'){
        $('#product iframe').click();
      }          
	});
	// $('a[#top]').on('click', function(e){
	//     e.preventDefault();
	// 	// $('.mobile-menu').hide('400', function() {
			
	// 	// });	    
	//     $('html,body').stop().animate({ scrollTop: 0 }, 1000);
	// });
  $('.popup-ask-buttons ._no').click(function(event) {
    $('.popup-ask-buttons').hide();
    $('.popup-list').show();
  });
   $('.popup-ask-buttons ._yes').click(function(event) {
     if($('.pop-city-detect').hasClass('_izh')){
        $('.map-block').hide();
        $('.mb-i').show();
     }
     if($('.pop-city-detect').hasClass('_kaz')){
        $('.map-block').hide();
        $('.mb-k').show();
     }
     $('.popup').fadeOut('400'); 
   });


});
