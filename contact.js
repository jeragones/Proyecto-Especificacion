$(document).ready(function() {
	$('#contact').click(function() {
		type = $(this).attr('data-type');
		$('.contenedor-contact').fadeIn(function() {
			window.setTimeout(function(){
				$('.ventana-contact.'+type).addClass('ventana-contact-visible');
			}, 200);
		});
	});
	$('#cerrarC').click(function() {		
		$('.contenedor-contact').fadeOut().end().find('.ventana-contact').removeClass('ventana-contact-visible');
	});	
});

