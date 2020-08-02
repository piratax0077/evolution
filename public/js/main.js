$(document).ready(function(){
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 800);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

$('#home').click(function(){
    $('html, body').animate({
      scrollTop: 0
    }),800
  });

  $('#nosotros').click(function(){
    $('html, body').animate({
      scrollTop: 450
    }),800
  });

  $('#servicios').click(function(){
    $('html, body').animate({
      scrollTop: 1260
    }),800
  });

  $('#contacto').click(function(){
    $('html, body').animate({
      scrollTop: 2400
    }),800
  });
});