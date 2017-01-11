<?php
require('connexionbdd.php');

function recupTable($mysql, $table){
	$req = $mysql->prepare("SELECT * FROM $table");
	$req->execute();

	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch()){
			$tab[] = $donnees;
		}
		//$reponse = $req->fetch();
		//var_dump($tab);
		return $tab;
	} else {
		return "Site non configuré";
	}
}

function recupSocietes($mysql, $id_user){
	$req = $mysql->prepare("SELECT * FROM societes, societe_user where id_user=$id_user");
	$req->execute();

	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch()){
			$tab[] = $donnees;
		}

		return $tab;
	} else {
		return "Site non configuré";
	}
}
?>