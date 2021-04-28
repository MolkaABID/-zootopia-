<?php

/**
 *
 */
class Event
{
  private $idEvent;
  private $reference;
  private $designation;
  private $prix;
  private $quantite;
  private $type;
  function __construct($a,$b,$c,$d,$e,$f)
  {
    $this->idEvent=$a;
    $this->reference=$b;
    $this->designation=$c;
    $this->prix=$d;
    $this->quantite=$e;
    $this->type=$f;
  }

  function GetidEvent()
  {
    return $this->idEvent;
  }

  function Getreference()
  {
    return $this->reference;
  }

  function Getdesignation()
  {
    return $this->designation;
  }

  function Getprix()
  {
    return $this->prix;
  }

  function Getquantite()
  {
    return $this->quantite;
  }

  function Gettype()
  {
    return $this->type;
  }
}


?>
