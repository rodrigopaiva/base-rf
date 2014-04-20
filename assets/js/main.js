$(document).ready(function() {

    // link externo
	$('.external').click(function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		window.open(url);
	});

    /* verifica a existencia do objeto */
    if ($('.classe').size() > 0) {
    	// aqui js
    }

}); // end ready
