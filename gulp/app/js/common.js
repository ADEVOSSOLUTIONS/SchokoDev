$(function() {
	

    $('input[type=tel]').mask('+7 (999) 999-99-99', {autoclear: false});
	// Мобильное меню
  	$('.mobile-menu-button').click(function(event) {
	    $('.open-menu').toggleClass('opened');
	});
    $('.main-slider ul').slick({
      dots: true,
      arrows: false,
    });
	// Вызов всплывающего окна
  	$('[data-popup]').click(function(event) {
    	var _popup_id = $(this).attr('data-popup');
    	$(_popup_id).fadeIn('fast');
    });

  	// Закрытие попапа при клике вне области
   	$('.popup').mouseup(function (e){ // событие клика по веб-документу
	    var div = $(".popup-content"); // тут указываем ID элемента
	    if (!div.is(e.target) // если клик был не по нашему блоку
	        && div.has(e.target).length === 0) { // и не по его дочерним элементам
	        $('.popup').fadeOut('fast');
	    }
	});
	// Закрытие попапа при клике вне области
   	$('.popup-main').mouseup(function (e){ // событие клика по веб-документу
	    var div = $(".popup-content"); // тут указываем ID элемента
	    if (!div.is(e.target) // если клик был не по нашему блоку
	        && div.has(e.target).length === 0) { // и не по его дочерним элементам
	        $(this).fadeOut('fast');
	    }
	});
	$('.popup-close').click(function(event) {
		$(this).closest('.popup-main').fadeOut('slow');
	});
	// Залипающее меню
   	$(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.top-nav').addClass('fixed-top');
      } else {
          $('.top-nav').removeClass('fixed-top');
      }
    });

    document.addEventListener( 'wpcf7submit', function( event ) {
	    $('body,html').animate({scrollTop: $('.contact-block').offset().top-150}, 800);
	    setTimeout(function(){
			$('.wpcf7-response-output').fadeOut('fast');
		},4000);

	}, false );

    $('img[src$=".svg"]').each(function() {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function() {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });
  $('.form-section select').selectmenu();
  $('.date-input input').datepicker();
  $('.selection-table li').click(function(event) {
    $('.selection-table li').removeClass('current-selection');
    $(this).addClass('current-selection');
    var _index = $(this).index();
    $('.selection-image ul').slick('slickGoTo', _index);
  });
  $('.selection-image ul').slick({
    arrows: false,
    dots: false,
    swipe: false
  });
  $('.form-tabs li').click(function(event) {
    if($(this).hasClass('current')){

    }
    else{
      $('.form-tabs li').removeClass('current');
      $(this).addClass('current');
      var _index = $(this).index();
      $('.form-tabs-content li').hide();
      $('.form-tabs-content li').eq(_index).show();

    }
  });
  $('.checkbox-input input').click(function(event) {
    if($(this).is(":checked")){
      $(this).closest('li').find('.checkbox-active').show();
    }
    else{
      $(this).closest('li').find('.checkbox-active').hide();
    }
  });
  var _html = $('.reviews-icon-slider ul').html();
  $('.reviews-icon-slider ul').append(_html);
  _html = $('.reviews-text-slider ul').html();
  $('.reviews-text-slider ul').append(_html);
  $('.reviews-icon-slider ul').not('.slick-initialized').slick({
    slidesToShow: 5,
    centerMode: true,
    asNavFor: '.reviews-text-slider ul',
    arrows: false,
    focusOnSelect: true,
    variableWidth: true
  });

  $('.reviews-text-slider ul').not('.slick-initialized').slick({
    asNavFor: '.reviews-icon-slider ul',
    arrows: false,
    slidesToShow: 1,
  });

});


