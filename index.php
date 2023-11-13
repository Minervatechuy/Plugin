<?php

/*
	Plugin Name: Simulador MinervaTech
	Plugin URI: https://minervatech.uy
	Description: Plugin de vinculación con las instancias de cálculos
	Version: 1.0
	Author: minervatech.uy
	Author URI: https://minervatech.uy
	License: GPL2
*/

defined('ABSPATH') or die("Error de ruta.");

/***********************************************************/
/*** Crea el shortcode para pedir la dirección del sitio ***/
/***********************************************************/
function inicio_calc_minerva () {
	ob_start();
	require_once  'views/inicio.php' ;
	return ob_get_clean();
}
add_shortcode( 'inicio_calc_minerva', 'inicio_calc_minerva' );

?>