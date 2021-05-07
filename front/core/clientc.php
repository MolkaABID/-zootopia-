<?php
include ("../config.php");
include("../config1.php") ; 
include ("../entities/client.php");
class clientC
{
   
	function ajoutClient($client)
	{
       $sql = "INSERT INTO client (id,nom,prenom,age,num,email,mdp) values (:id,:nom,:prenom,:age,:num,:email,:mdp)";//requete sql
       
        $db= config::getConnexion();
        try {

            $id=$client->getId();
        	$nom=$client->getNom();
            $prenom=$client->getPrenom(); 
            $age=$client->getAge();
            $num=$client->getNum();
        	$email=$client->getEmail();
        	$mdp=$client->getMdp(); 
            $mdp=md5("$mdp") ; 
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':age', $age);
            $req->bindValue(':num', $num);
            $req->bindValue(':email', $email);
            $req->bindValue(':mdp', $mdp);
            
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