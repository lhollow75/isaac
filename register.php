<?php
require ('connexionbdd.php');

if(isset($_POST) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['telephone'])) {
	$prenom = htmlspecialchars($_POST['prenom']);
	$nom = htmlspecialchars($_POST['nom']);
	$pass1 = htmlspecialchars($_POST['password']);
	$email = htmlspecialchars($_POST['email']);
	$telephone = htmlspecialchars($_POST['telephone']);
	$pass = md5($pass1);

	$req = $mysql->prepare("SELECT * FROM users WHERE email = :email");
	$req->execute(array(
		':email'=>$email
		));

	if($req->rowCount()>=1) {
		$reponse = $req->fetch();
		session_start();
		$_SESSION['login']=false;
		header('location:./v2');
		
	}
	else {
		$req = $mysql->prepare("INSERT INTO users (nom, prenom, password, email_1, telephone)
								VALUES (:nom, :prenom, :mdp, :email, :tel)");
		$req->execute(array(
		':nom'=>$nom,
		':prenom'=>$prenom,
		':mdp'=>$pass,
		':email'=>$email,
		':tel'=>$telephone
		));

		$_SESSION['login']=true;
		header('location:./v2');
	}
}
?>