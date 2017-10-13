<?php

class people
{
  private $_name;
  private $_firstname;
  private $_address;

  public function __construct($name, $firstname, $address)
  {
    $this->setName($name);
    $this->setFirstname($firstname);
    $this->setAddress($address);
  }
  public function __destruct()
  {
    echo "L'objet a etait detruit !";
  }

  public function setName($name)
  {
    $this->_name = $name;
  }

  public function setFirstname($firstname)
  {
    $this->_firstname = $firstname;
  }

  public function setAddress($address)
  {
      $this->_address = $address;
  }

  public function getName()
  {
    return $this->_name;
  }

  public function getFirstname()
  {
    return $this->_firstname;
  }

  public function getAddress()
  {
    return $this->_address;
  }

  public function getPeople()
  {
    echo $this->getName(), " ", $this->getFirstname(), " ", $this->getAddress(),"<br />";
  }
}

$people1 = new people ("forrez"," cyril"," 9 rue leonard de vinci");
$people1->getPeople();
$people1->setAddress("blbblblblblblblblblbl");
$people1->getPeople();
unset($people1);
$people1->getPeople();
