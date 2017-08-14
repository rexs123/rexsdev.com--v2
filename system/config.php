<?php
/*
  CONFIG.php
  VERSION 1.0
*/

ob_start();
session_start();

/* SITE CONFIGURATION */
define('BASEURL','https://rexsdev.com/');
define('SITEEMAIL','no-reply@rexsdev.com');
define('MAILNAME','No-Reply Rexs Development');

/* DATABASE CONFIGURATION */
include("data.php"); #including the password externally to ignore from github.

/* if you need the database connection info.
define("DBHOST", "localhost");
define("DBUSER", "username");
define("DATABS", "database");
define("DBPASS", "password");
*/

/* DO NOT EDIT BELOW */
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DATABS);
if ($conn->connect_error) {
    die("Oop's, Somethings broken!");
}

/* ROUTING */
define('ROOT_PATH', dirname(__DIR__) . '/');
define("APP_ROOT", realpath( dirname( __FILE__ ) ).'/' );

/* CLASSES */
include(APP_ROOT.'class.int.php');
