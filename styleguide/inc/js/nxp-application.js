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

headerStr = '   <div class="wrap">'+
'                    <div class="title-area">'+
'                        <p class="site-title" itemprop="headline">'+
// '                            <a href="'+opts.index+'" title="Site title - Home">NXP Brand Guide - Home</a>'+
'                            <a href="index2.html" title="Site title - Home">NXP Brand Guide - Home</a>'+
'                        </p>'+
'                        <p class="site-description">Brand Guide</p>'+
'                    </div><!-- .title-area -->'+
'                    <div class="help-button">'+
'                        <a href="mailto:identity@nxp.com" title="get support" class="general-cta"><span class="blocker">Support</span></a>'+
'                    </div>'+
// '                    <p class="date-edited">Last edit: Thu, 20 Aug 2015 09:19:39 +0200</p>'+
'                 </div>';

$( document ).ready(function() {
	 $('head').append('<base href="http://localhost:4567/ewmlx1/basecamp/styleguide/" >');
   $('.site-header').html(site_header({}));
   $('nav.nav-primary').html(nav_primary());

function site_header(opts){
	 opts.index = opts.index || "index.html";
    return '<header class="site-header">'+
'                <div class="wrap">'+
'                    <div class="title-area">'+
'                        <p class="site-title" itemprop="headline">'+
'                            <a href="'+opts.index+'" title="Site title - Home">NXP Brand Guide - Home</a>'+
'                        </p>'+
'                        <p class="site-description">Brand Guide</p>'+
'                    </div><!-- .title-area -->'+
'                    <div class="help-button">'+
'                        <a href="mailto:identity@nxp.com" title="get support" class="general-cta"><span class="blocker">Support</span></a>'+
'                    </div>'+
// '                    <p class="date-edited">Last edit: Thu, 20 Aug 2015 09:19:39 +0200</p>'+
'                 </div>'+
'            </header><!-- .site-header -->';
};


function nav_primary(){
return ' <nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">'+
'                <div class="wrap">'+
'                    <ul class="nxp-nav-menu">'+
'                        <li class="menu-item current-menu-item"><a href="our-brand.html">Our brand</a></li><li class="menu-item"><a href="javascript:void(0)">Design elements</a><ul class="sub-menu"><li class="menu-item"><a href="design-elements/logo.html">Logo</a></li><li class="menu-item"><a href="design-elements/colors.html">Colors</a></li><li class="menu-item"><a href="design-elements/typography.html">Typography</a></li><li class="menu-item"><a href="design-elements/photography.html">Photography</a></li><li class="menu-item"><a href="design-elements/icons.html">Icons</a></li></ul></li><li class="menu-item"><a href="javascript:void(0)">Print</a><ul class="sub-menu"><li class="menu-item"><a href="print/stationery.html">Stationery</a></li></ul></li><li class="menu-item"><a href="javascript:void(0)">Digital / Online</a><ul class="sub-menu"><li class="menu-item"><a href="digital-online/powerpoint.html">Powerpoint</a></li></ul></li><li class="menu-item"><a href="javascript:void(0)">Other</a><ul class="sub-menu"><li class="menu-item"><a href="others/product-marking.html">Product marking</a></li><li class="menu-item"><a href="others/packaging.html">Packaging</a></li></ul></li>                    </ul><!-- .nxp-nav-menu -->'+
'                </div><!-- .wrap -->'+
'            </nav><!-- .nav-primary -->';
}

});