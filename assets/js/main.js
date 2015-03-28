$(document).ready(function() {

    // link externo
	$('.external').click(function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		window.open(url);
	});

	// abas
		$('#tab-content .tab-content:first-child').css('display', 'block');
		$('#tab-nav li:first-child a').addClass('current');

		var alturaInicial = $('#tab-content .tab-content:first-child').innerHeight();
		$('#tab-content').height(alturaInicial);

		$('a', $('#tab-nav')).click(function() {
			var i = $('a', $('#tab-nav') ).index(this) + 1;
			$(this).parents('#tabs').children('#tab-content').children('.tab-content:visible').hide();
			$('#tab-' + i).show();
			$(this).parents('#tab-nav').find('a').removeClass('current');
			$(this).addClass('current');

			var altura = $('#tab-' + i ).innerHeight();
			$('#tab-content').stop().animate({
				height: altura
			}, 'slow' );

			return false;
		});


	/* lightbox */
        $('.fancybox').fancybox();

        // abrir lightbox na hash
        if(window.location.hash) {
            $.fancybox.open(thisHash);
        }

    /* verifica a existencia do objeto */
    if ($('.classe').size() > 0) {
    	// aqui js
    }

}); // end ready
