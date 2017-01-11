<?php
require ('connexionbdd.php');

if(isset($_POST) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['tel'])) {
	$prenom = htmlspecialchars($_POST['prenom']);
	$nom = htmlspecialchars($_POST['nom']);
	$pass1 = htmlspecialchars($_POST['password']);
	$email = htmlspecialchars($_POST['email']);
	$telephone = htmlspecialchars($_POST['tel']);
	$pass = md5($pass1);

	$req = $mysql->prepare("SELECT * FROM users WHERE email_1 = :email or email_2 = :email");
	$req->execute(array(
		':email'=>$email
		));
	var_dump($req->rowCount());
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
		':nom'=>utf8_decode($nom),
		':prenom'=>utf8_encode($prenom),
		':mdp'=>utf8_decode($pass),
		':email'=>utf8_decode($email),
		':tel'=>utf8_decode($telephone)
		));
		
		$lastId = $mysql->lastInsertId();
		echo $lastId;
		session_start();
		$_SESSION['login']=true;
		$_SESSION['user']=$lastId;
		$_SESSION['prenom']=$prenom;
		// header('location:./v2');
	}
} else {
	echo "ERREUR DE DONNEES";
}
?>