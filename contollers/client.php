<?php
class client
{
    private $cin;
	private $nom;
	private $prenom;
	private $ddn;
    private $num;
    private $email;
    private $mdp;
    private $role ; 
    private $username ; 
	function __construct($username,$nom,$prenom,$cin,$ddn,$num,$email,$mdp,$role)
	{
        $this->username=$username;
        $this->cin=$cin; 
		$this->nom=$nom;
        $this->prenom=$prenom;
        $this->ddn=$ddn;
        $this->num=$num;
        $this->email=$email;
        $this->mdp=$mdp;
        $this->role=$role;
       
	}
    function getcin()
    {
        return $this->cin;
    }
	function getNom()
    {
        return $this->nom;
    }
    function getPrenom()
    {
        return $this->prenom;
    }
    function getddn()
    {
        return $this->ddn;
    }
    function getNum()
    {
        return $this->num;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getMdp()
    {
        return $this->mdp;
    }
    function getrole()
    {
        return $this->role;
    }
    function getusername()
    {
        return $this->username;
    }
    function setcin($cin)
    {
        $this->cin = $cin;
    }
     function setNom($nom)
    {
        $this->nom = $nom;
    }
     function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
     function setddn($ddn)
    {
        $this->ddn = $ddn;
    }
     function setNum($num)
    {
        $this->num = $num;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
    function setrole($role)
    {
        $this->mdp = $role;
    }
    function setusername($username)
    {
        $this->username = $username;
    }
}
?>