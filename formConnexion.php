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
		if ($reponse["admin"]==1){
			$_SESSION['admin']=true;
            
		} else {
			$_SESSION['admin']=false;
            
		}
		header('location:./index.php/v2');
		
	}
	else {
		header('location:./index.php/v2');
		exit();
	}
}
?>