<?php 

/** Debug Mode */
define( 'TWIG_DEBUG', true );

/** The name of the database */
define( 'DBName', 'db_secondsite' );

/** MySQL database username */
define( 'DBUser', 'root' );

/** MySQL database password */
define( 'DBPassword', 'password' );

/** MySQL hostname */
define( 'DBHost', 'localhost' );

/** MySQL port */
define('DBPort', 3306);

/** Database Charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );

if ( ! defined('__root_path__')) {
    define('__root_path__', dirname(__FILE__));
}

//////////////////////////////////////////////////////////////
////////////////////// Troubleshooting code//////////////////
////////////////////////////////////////////////////////////
// $url = $_SERVER['REQUEST_URI']; //returns the current URL
// $parts = explode('/',$url);
// $dir = $_SERVER['SERVER_NAME'];
// for ($i = 0; $i < count($parts) - 1; $i++) {
//  $dir .= $parts[$i] . "/";
// }
// echo $dir;
// echo $_SERVER['DOCUMENT_ROOT'];
// echo __DIR__;
// echo getcwd();
///////////////////////////////////////////////////////
