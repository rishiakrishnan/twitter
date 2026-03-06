<?php 
ob_start();
session_start();

// DB Params
define('DB_HOST', 'db');   // Docker MySQL service name
define('DB_USER', 'twitter');
define('DB_PASS', 'twitter');
define('DB_NAME', 'twitter');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://3.238.49.111:8080');

// Site Name
define('SITENAME', 'Twitter'); 
