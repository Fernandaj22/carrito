<?php
	date_default_timezone_set('America/Mexico_City');
	error_reporting(E_ALL);
	ini_set('display_errors', 'off');

	define( 'URL' ,"http://localhost/".basename(getcwd())."/");

	define( 'CSS' , URL."public/css/");
	define( 'JS' , URL."public/js/" );
	define( 'IMG', URL."public/images/");
	define( 'LIB', URL."libs/");

	//Crean el archivo de config.js
	@$file = fopen("public/js/config.js", "w");
	@fwrite($file,
		'var config = {
			url: "'.URL.'",
			img: "'.URL.'public/images/"
		}');
	@fclose($file);

	//Constantes de la base de datos
	define( 'DB_HOST' , 'localhost');
	define( 'DB_USER' , 'root');
	define( 'DB_PASS' , '');
	define( 'DB_NAME' , 'carrito3');

	define( 'DB_CHARSET' ,'utf8');

	define( 'ALGOR', 'sha512');
	define( 'KEY', 'dWVjbzIxNw==');
	define( 'ID_SESSION', 'ueco217');
?>