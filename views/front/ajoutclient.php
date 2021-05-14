<?php
include ("../core/clientC.php");


if(isset($_POST['username']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['num']) and isset($_POST['email']) and isset($_POST['mdp'])and isset($_POST['role']))
{
	$errors=[] ; 
	if (empty($_POST['username'])) {
		$errors['username']='username  obligatoire' ; 
	}
	if (empty($_POST['nom'])) {
		$errors['nom']='nom obligatoire' ; 
	}
	if (empty($_POST['prenom'])) {
		$errors['prenom']='nom obligatoire' ; 
	}
	if (empty($_POST['age'])) {
		$errors['age']='age obligatoire' ; 
	}
	if (empty($_POST['num'])) {
		$errors['num']='numero obligatoire' ; 
	}
	if (empty($_POST['email'])) {
		$errors['email']='email obligatoire' ; 
	}
	if (empty($_POST['mdp'])) {
		$errors['mdp']='mdp obligatoire' ; 
	}




	if (empty($errors)){
	$client= new client( $_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['age'],$_POST['num'],$_POST['email'],$_POST['mdp'],$_POST['role']);
	$clientC=new clientC();
	$clientC->ajoutClient($client);
	header('Location:inscription.php');
			}
}
else
{echo"verifier les champs";}
?>
