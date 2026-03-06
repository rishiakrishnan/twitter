<?php 
ob_start();
session_start();

// DB Params
define('DB_HOST', 'twitter_db');   // Docker MySQL service name
define('DB_USER', 'twitteruser');
define('DB_PASS', 'twitterpass');
define('DB_NAME', 'twitter');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost:8080');

// Site Name
define('SITENAME', 'Twitter'); 
