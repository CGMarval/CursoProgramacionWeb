<?php

// Configura la salida de errores por pantalla
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

define( 'SITE_URL', 'http://localhost/Ejercicios/UF1845/MICROCMS-CGM' );
define( 'SITE_TIMEZONE', 'Atlantic/Canary' );
define( 'SITE_LANG', [ 'es', 'spa', 'es_ES' ] );

// Conexión a Base de Datos
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_DATABASE', 'microcms' );
define( 'DB_PORT', '3306' );

define( 'ADMIN_USER', 'cleyber' );
define( 'ADMIN_PASS', 'cgm92' );
