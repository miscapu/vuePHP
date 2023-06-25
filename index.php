<?php
/**
 * Main Template
 *
 * @author MiSCapu
 * @since MiSCapu 1.0
 * @package MiScapu Vue
 *
 */

/**
 * Errors PHP
 */
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require __DIR__."/vendor/autoload.php";

define( 'BASE_URL', 'http://localhost:8888/Github/PHP/2' );
define( 'TITLE', 'Dashboard' );

include __DIR__."/app/Views/Pages/Dashboard.php";