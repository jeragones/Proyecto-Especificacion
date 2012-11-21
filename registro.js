$(document).ready(function() {
	$('#regis').click(function() {
		type = $(this).attr('data-type');
		$('.contenedor-registro').fadeIn(function() {
			window.setTimeout(function(){
				$('.ventana-registro.'+type).addClass('ventana-registro-visible');
			}, 200);
		});
	});
	$('#cerrarReg').click(function() {
		$('.contenedor-registro').fadeOut().end().find('.ventana-registro').removeClass('ventana-registro-visible');
	});
});