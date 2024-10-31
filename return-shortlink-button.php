<?php
/*
Plugin Name: Return shortlink button
Plugin URI: http://www.chegevara29.ru/
Description: Return "shortlink" button on edit page 
Version: 1.0
Author: CheGevara
Author URI: http://www.chegevara29.ru/
*/
add_filter( 'get_shortlink', function( $shortlink ) {return $shortlink;} );
?>