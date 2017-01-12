<?php
require('../connexionbdd.php');
session_start();

if(isset($_POST) && !empty($_POST['nom'])) {
	// var_dump($_POST);
	$nom = htmlspecialchars($_POST['nom']);
	$formeJuridique = htmlspecialchars($_POST['formeJuridique']);
	$email = htmlspecialchars($_POST['email']);
	$siret = htmlspecialchars($_POST['siret']);
	$tel = htmlspecialchars($_POST['tel']);
	$adresse = htmlspecialchars($_POST['adresse']);
	$cp = htmlspecialchars($_POST['cp']);
	$ville = htmlspecialchars($_POST['ville']);
	$pays = htmlspecialchars($_POST['pays']);
	$description = htmlspecialchars($_POST['description_marque']);
	$ville = htmlspecialchars($_POST['ville']);
	

	$req = $mysql->prepare("SELECT id_societe FROM societes WHERE raison_sociale = :nom");
	$req->execute(array(
		':nom'=>$nom
		));

	if($req->rowCount()>=1) {
		$reponse = $req->fetch();
		session_start();
		$_SESSION['societe']=false;
		// echo "trouvé";
		//header('location:./');
	}
	else {
		$req = $mysql->prepare("INSERT INTO societes (id_forme_juridique, siret, raison_sociale, adresse, codepostal, ville, pays, description_marque, telephone, email)
								VALUES (:formeJuridique, :siret, :raisonsociale, :adresse, :cp, :ville, :pays, :description, :telephone, :email)");
		$req->execute(array(
			':formeJuridique'=>utf8_decode($formeJuridique),
			':siret'=>utf8_encode($siret),
			':raisonsociale'=>utf8_decode($nom),
			':adresse'=>utf8_decode($adresse),
			':cp'=>utf8_decode($cp),
			':ville'=>utf8_decode($ville),
			':pays'=>utf8_decode($pays),
			':description'=>utf8_decode($description),
			':telephone'=>utf8_decode($tel),
			':email'=>utf8_decode($email)
		));
		
		$lastId = $mysql->lastInsertId();
		
		session_start();
		$_SESSION['login']=true;
		$_SESSION['societe']=true;
		header('location:./');
		
		$req = $mysql->prepare("INSERT INTO societe_user (id_societe, id_user) VALUES (:idsociete, :iduser)");
		$req->execute(array(
			':idsociete'=>utf8_decode($lastId),
			':iduser'=>utf8_encode($_SESSION['user'])
		));
	}
} else {
	echo "ERREUR DE DONNEES";
}
?>