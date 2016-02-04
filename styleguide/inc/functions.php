<?php

function savePage( $html, $page, $subpage = '' ) {

	$path	= $_SERVER['DOCUMENT_ROOT'] . '/';
	$ext	= '.html';

	if ( isset( $subpage ) && ( ! empty( $subpage ) ) ) {
		$target = $path . $page . '/' . $subpage . $ext;
	} else {
		$target = $path . $page . $ext;
	}

	$fp = fopen( $target, 'w');
	fwrite( $fp, $html );
	fclose( $fp );

}

function is_active_page( $pSlug ) {

	$file = $_SERVER['DOCUMENT_ROOT'] . '/pages/' . $pSlug . '.php';
	return file_exists( $file );

}

function html2rgb( $color ) {

	if ( $color[0] == '#' ) {
		$color = substr( $color, 1 );
	}

	if ( strlen( $color ) == 6 ) {
		list( $r, $g, $b ) = array(
			$color[0] . $color[1],
			$color[2] . $color[3],
			$color[4] . $color[5]
		);
	} elseif (strlen($color) == 3) {
		list( $r, $g, $b ) = array(
			$color[0] . $color[0],
			$color[1] . $color[1],
			$color[2] . $color[2]
		);
	} else {
		return false;
	}

	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );

	return array( $r, $g, $b );
}

function nxp_color_section ( $colorAttr ) {

	$color_name	= $colorAttr[0];
	$color_hex	= $colorAttr[1];

	$color_rgb	= html2rgb( $color_hex );
	$color_r 	= $color_rgb[0];
	$color_g 	= $color_rgb[1];
	$color_b 	= $color_rgb[2];

	$html = '';

	$html .= '<div class="declaration-of-color">';
	$html .= 	'<div class="color-square" style="background:'. $color_hex .'" ></div>';
	$html .= 	'<p><b>' . $color_name . '</b></p>';
	$html .= 	'<ul>';
	$html .= 		'<li><label>R</label> ' . $color_r . '</li>';
	$html .= 		'<li><label>G</label> ' . $color_g . '</li>';
	$html .= 		'<li><label>B</label> ' . $color_b . '</li>';
	$html .= 		'<li>' . str_replace('#', '<label>#</label> ', $color_hex ) . '</li>';
	$html .= 	'</ul>';
	$html .= '</div>';

	return $html;
}

function nxp_color_tints_head() {

	$html = '';

	$html .= '<ul class="color-tints color-tints-head">';
	for ( $i=10; $i >= 1; $i-- ) {
		$html .= '<li>' . ( $i * 10 ) . '%</li>';
	}
	$html .= '</ul>';

	return $html;	

}

function nxp_color_tints( $colorAttr ) {

	$color_name			= $colorAttr[0];
	$color_hex			= $colorAttr[1];
	$color_threshold	= $colorAttr[2];

	$color_rgb			= html2rgb( $color_hex );
	$color_r 			= $color_rgb[0];
	$color_g 			= $color_rgb[1];
	$color_b 			= $color_rgb[2];

	$html = '';

	$html .= '<p><b>' . $color_name . '</b></p>';
	$html .= '<ul class="color-tints color-tints-body">';
	for ( $i=10; $i >= 1; $i-- ) {

		$background_color = 'rgba(' . $color_r . ',' . $color_g . ',' . $color_b . ', ' . ( $i / 10 ) .')';

		$current_index = ( $i * 10 );
		if ( $current_index > $color_threshold ) {
			$text = '<span style="color:#ffffff;">Light<br />text</span>';
		} else {
			$text = '<span style="color:#5a5b5c;">Dark<br />text</span>';
		}

		$html .= '<li>';
		$html .= 	'<div class="color-square" style="background:'. $background_color .'" >' . $text . '</div>';
		$html .= '</li>';
	}

	$html .= '</ul>';	

	return $html;

}