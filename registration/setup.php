<?php

// Includes

require_once 'includes/google-api-php-client/apiClient.php';
require_once 'includes/google-api-php-client/contrib/apiOauth2Service.php';
require_once 'includes/idiorm.php';
require_once 'includes/relativeTime.php';

// Session. Pass your own name if you wish.

session_name('rizsoft');
session_start();

// Database configuration with the IDIORM library

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'jallosh';

ORM::configure("mysql:host=$host;dbname=$database");
ORM::configure('username', $user);
ORM::configure('password', $pass);

// Changing the connection to unicode
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Google API. Obtain these settings from https://code.google.com/apis/console/

$redirect_url = 'http://127.0.0.1/jallosh/registration/index.php'; // The url of your web site
$client_id = '713051132537-occapcdv77egpqvll0ettt8dk4rih0ki.apps.googleusercontent.com';
$client_secret = 'VT8_FVxsmzsy-SOUQuj8VAY2';
$api_key = 'AIzaSyAJtIlK6cuNkZmNCl5VHFFSCUyMH5EpLec';
