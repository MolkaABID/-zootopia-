<?php
class Package{
	private $code;
	private $nom;
	private $qte;
	private $date;
	private $prix;
	private $alerte;
	private $type;
	private $image;
	private $description;
	function __construct($code,$qte,$nom,$date,$prix,$alerte,$type,$image,$description){
		$this->code=$code;
		$this->nom=$nom;
		$this->qte=$qte;
		$this->date=$date;
		$this->prix=$prix;
		$this->alerte=$alerte;
		$this->type=$type;
		$this->image=$image;
		$this->description=$description;
	}
	function getCode(){
		return $this->code;
	}
	function getImage(){
		return $this->image;
	}
	function getDescription(){
		return $this->description;
	}
	function getQte(){
		return $this->qte;
	}
	function getDate(){
		return $this->date;
	}
	function getAlerte(){
		return $this->alerte;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrix(){
		return $this->prix;
	}
	function getType(){
		return $this->type;
	}
	function setImage($image){
		$this->image=$image;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setType($type){
		$this->type=$type;
	}
	function setCode($code){
		$this->code=$code;
	}
	function setQte($qte){
		$this->qte=$qte;
	}
	function setDate($date){
		$this->date=$date;
	}
	function setAlerte($alerte){
		$this->alerte=$alerte;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}

}

?>
