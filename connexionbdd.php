<?php
define("SQL_HOST", "mysql.hostinger.fr");
define("SQL_USER", "u249459519_isaac");
define("SQL_PASS", "N7v>fmd^apB?3");
define("SQL_DBNAME", "u249459519_isaac");
try
{
	$mysql = new PDO("mysql:dbname=".SQL_DBNAME.";host=".SQL_HOST,SQL_USER,SQL_PASS);
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>