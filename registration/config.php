<?php
/**
@author muni
@copyright http:www.smarttutorials.net
 */

//require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://127.0.0.1/jallosh/home.php');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'jallosh');

//Google App Details
define('GOOGLE_APP_NAME', 'CultivatingHappyness Google+ login');
define('GOOGLE_OAUTH_CLIENT_ID', '713051132537-occapcdv77egpqvll0ettt8dk4rih0ki.apps.googleusercontent.com');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'VT8_FVxsmzsy-SOUQuj8VAY2');
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://127.0.0.1/jallosh/reg/home.php');
define("GOOGLE_SITE_NAME", 'http://127.0.0.1/jallosh/reg/home.php'); 

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
