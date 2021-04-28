<?php
/**
 *
 */
class listeAchat
{
  private $idPackage;
  private $idclient;
  private $quantite;
  private $date;

  function __construct($a,$b,$c,$d)
  {
    $this->idclient=$a;
    $this->idPackage=$b;
    $this->quantite=$c;
    $this->date=$d;
  }

  function GetidPackage()
  {
    return $this->idPackage;
  }
  function SetidPackage($var)
  {
    $this->idPackage=$var;
  }

  function Getidclient()
  {
    return $this->idclient;
  }
  function Setidclient($var)
  {
    $this->idclient=$var;
  }

  function Getquantite()
  {
    return $this->quantite;
  }
  function Setquantite($var)
  {
  $this->quantite=$var;
  }

  function Getdate()
  {
    return $this->date;
  }
  function Setdate($var)
  {
    $this->date=$var;
  }

}




?>
