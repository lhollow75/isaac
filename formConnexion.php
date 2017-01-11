<?php
require ('connexionbdd.php');

if(isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password']) ) {
	$login = htmlspecialchars($_POST['identifiant']);
	$pass1 = htmlspecialchars($_POST['password']);
	$pass = md5($pass1);

	$req = $mysql->prepare("SELECT * FROM users WHERE email_1 = :login AND password = :pass");
	$req->execute(array(
		':login'=>$login,
		':pass'=>$pass
		));

	if($req->rowCount()==1) {
		$reponse = $req->fetch();
		session_start();
		$_SESSION['login']=true;
		$_SESSION['prenom']=$reponse['prenom'];
		$_SESSION['user']=$reponse['id_users'];
		
		$req2 = $mysql->prepare("SELECT * FROM societe_user WHERE id_user = :login");
		$req2->execute(array(
			':login'=>$reponse['id_users']
			));
		if($req2->rowCount()==1) {
			$_SESSION['societe']=true;
		} else {
			$_SESSION['societe']=false;
		}
			
		header('location:./v2');		
	}
	else {
		header('location:./v2');
		exit();
	}
}
?>