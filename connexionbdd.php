<?php
if ($_SERVER["HTTP_HOST"]=='localhost'){
	define("SQL_HOST", "localhost");
	define("SQL_USER", "root");
	define("SQL_PASS", "");
	define("SQL_DBNAME", "isaac");
} else if ($_SERVER["HTTP_HOST"]=='isaac-ia.com'){
	define("SQL_HOST", "mysql.hostinger.fr");
	define("SQL_USER", "u249459519_isaac");
	define("SQL_PASS", "N7v>fmd^apB?3");
	define("SQL_DBNAME", "u249459519_isaac");
}

try
{
	$mysql = new PDO("mysql:dbname=".SQL_DBNAME.";host=".SQL_HOST,SQL_USER,SQL_PASS);
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>