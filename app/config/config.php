<?php 
ob_start();
session_start();

// DB Params
define('DB_HOST', 'db');
define('DB_USER', 'twitter');
define('DB_PASS', 'twitter');
define('DB_NAME', 'twitter');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://' . $_SERVER['HTTP_HOST']);

// Site Name
define('SITENAME', 'Twitter');