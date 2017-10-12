<?php

class villes
{
  private $_nom;
  private $_departement;

  public function afficher()
  {
    echo "La ville de ", $this->nom(), " et dans le departement du ", $this->departement(),'<br />';
  }

  public function setNom($nom)
  {

   $this->_nom = $nom;
  }

  public function nom()
  {
    return $this->_nom;
  }

  public function setDepartement($departement)
  {
  $this->_departement = $departement;
  }

  public function departement()
  {
    return $this->_departement;
  }
}

$ville1 = new villes;
$ville1->setNom('Lille');
$ville1->setDepartement('Nord');
$ville1->afficher();

$ville2 = new villes;
$ville2->setNom('Montreal');
$ville2->setDepartement('Quebec');
$ville2->afficher();
