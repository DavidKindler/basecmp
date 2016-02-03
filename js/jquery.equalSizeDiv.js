jQuery(document).ready(function($) {
		
		var maxHeight = 0;
		// $('.lc:not(#psp-jsp-id .lc)').children('.ccl,.ccr').each(function() {
		$('.ccl,.ccr').each(function() {
			var height = $(this).outerHeight();
			if ( height > maxHeight ) {
				maxHeight = height;
			}
		});
		$('.ccl,.ccr').css({'min-height':maxHeight});

});