<?php
// require ('../connexionbdd.php');
session_start();
require('../functionBdd.php');
$societes=recupSocietes($mysql,$_SESSION['user']);

if (isset($_SESSION['societe']) and $_SESSION['societe']==true){
	var_dump($societes);
	foreach ($societes as $key => $value) {
		// var_dump($key);
	}
}