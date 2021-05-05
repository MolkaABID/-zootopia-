<?php
include ("../config.php");
include("../config1.php") ; 
include ("../entities/client.php");
class clientC
{
   
	function ajoutClient($client)
	{
       $sql = "INSERT INTO client (cin,nom,prenom,ddn,num,email,mdp,role,username) values (:cin,:nom,:prenom,:ddn,:num,:email,:mdp,:role,:username)";//requete sql
       
        $db= config::getConnexion();
        try {
            $username=$client->getusername() ; 
            $cin=$client->getcin();
        	$nom=$client->getNom();
            $prenom=$client->getPrenom(); 
            $ddn=$client->getddn();
            $num=$client->getNum();
        	$email=$client->getEmail();
        	$mdp=$client->getMdp(); 
            $mdp=md5("$mdp") ; 
            $role=$client->getrole() ; 
            $req = $db->prepare($sql);
            $req->bindValue(':cin', $cin);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':ddn', $ddn);
            $req->bindValue(':num', $num);
            $req->bindValue(':email', $email);
            $req->bindValue(':mdp', $mdp);
            $req->bindValue(':role', $role);
            $req->bindValue(':username',$username) ; 
            
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
    function afficher_return()
        {
            $config=new config();
            $instance=$config->getConnexion();

           $response=$instance->query('SELECT * FROM client');
            return $response;
        }
}

?>