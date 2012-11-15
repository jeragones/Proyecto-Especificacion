$(document).ready(function() {
	$('#login').click(function() {
		type = $(this).attr('data-type');
		$('.contenedor-login').fadeIn(function() {
			window.setTimeout(function(){
				$('.ventana-login.'+type).addClass('ventana-login-visible');
			}, 200);
		});
	});
	$('#cerrarL').click(function() {
		$('.contenedor-login').fadeOut().end().find('.ventana-login').removeClass('ventana-login-visible');
	});
});