function createTOC() {

	var toc_created	= false;
	var toc_items	= '';
	var toc_count	= 0;

	$( '.tocable' ).each( function() {

		toc_created 		= true;

		var $this 			= $( this );
		var random_string	= randomString( 8 );
		var toctitle		= $this.data( 'toctitle' );
		if ( ! toctitle ) {
			toctitle = $this.text();
		}
		$this.attr( 'id', random_string );

		toc_items += '<li><a href="#' + random_string + '">' + toctitle + '</a></li>'

		toc_count++;
	});

	if ( toc_created && ( toc_count > 1 ) ) {
		toc_items = '<div class="toc"><div class="wrap"><p>Table of Contents:</p><ul>' + toc_items + '</ul><div class="divider"></div></div></div>';
		$( toc_items ).insertAfter( $( '.mainvisual-section' ) );
	}

}

function randomString(length) {
    var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');

    if (! length) {
        length = Math.floor(Math.random() * chars.length);
    }

    var str = '';
    for (var i = 0; i < length; i++) {
        str += chars[Math.floor(Math.random() * chars.length)];
    }
    return str;
}

$( document ).ready(function() {

	//start fancybox
	$( '.fancybox' ).fancybox();

	//create Table Of Contents
	createTOC();

	$( window ).scroll(function () { 
		var y = $( window ).scrollTop();

		if ( y > 222 ) {
			$( 'body' ).addClass( 'site-scrolled' );
			$( '.mainvisual-section').css({'margin-bottom': $('.toc').outerHeight() + 'px'});
		} else {
			$( 'body' ).removeClass( 'site-scrolled' );
			$( '.mainvisual-section').removeAttr( 'style' );
		}

		console.log( y );
	});

	$( 'a[href^="#"]' ).on( 'click', function (e) {

		e.preventDefault();

		var target	= this.hash;
		var $target	= $(target);
		var y 		= $target.offset().top - 300;

		$( 'html, body' ).stop().animate( { 'scrollTop': y}, 900, 'swing' );

		return false;

	});				

});