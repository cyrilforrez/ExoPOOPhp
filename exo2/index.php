<?php

class villes
{
  private $_nom;
  private $_departement;

  public function __construct($nom, $departement)
  {
    echo "La ville de ", $this->$nom, " et dans le departement du ", $this->departement(),'<br />';


  }

  public function setNom($nom)
  {
    $this->_nom = $nom;
  }

  public function setDepartement($departement)
  {
    $this->_departement = $departement;
  }
}

$ville1 = new villes ('Lille', 'Nord');
$ville2 = new villes ('Montreal', 'Quebec');
