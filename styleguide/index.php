<?php 

global $config, $page, $sub_page, $last_edit;

if (  $_SERVER['REQUEST_URI'] == '/' ) {
	 $_SERVER['REQUEST_URI'] = '/our-brand.html';
}

$request_arr = explode( '/', $_SERVER['REQUEST_URI'] );
$request_arr = array_filter( $request_arr );

$page = str_replace( '.html', '',  array_shift( $request_arr ) );
$sub_page = str_replace( '.html', '',  array_pop( $request_arr ) );


if ( isset( $sub_page ) && ( ! empty( $sub_page ) ) ) {
	$include = $sub_page;
} else {
	$include = $page;
	$sub_page = '';
}

$last_edit = filemtime( 'pages/' . $include . '.php' );

include( 'inc/config.php' );
include( 'inc/functions.php' );
include( 'templates/header.php' );
include( 'pages/' . $include . '.php' );
include( 'templates/footer.php' );