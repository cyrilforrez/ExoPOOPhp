<?php

class people
{
  private $_name;
  private $_firstname;
  private $_address;

  public function __construct($name, $firstname, $address) //Constructor requesting 2 parameters
  {
    $this->setName($name); //Initialization of name
    $this->setFirstname($firstname); //Initialization of firstname
    $this->setAddress($address); //Initialization of address
  }

  // This is the __destruct() method: destroys the object
  public function __destruct()
  {
    echo "L'objet a etait detruit !";
  }

//Switch to modify the attribute $_name
  public function setName($name)
  {
    $this->_name = $name;
  }

//Switch to modify the attribute $_firstname
  public function setFirstname($firstname)
  {
    $this->_firstname = $firstname;
  }

//Switch to modify the attribute $_address
  public function setAddress($address)
  {
      $this->_address = $address;
  }

//This is the getName () method: it is responsible for returning the contents of the attribute $_name
  public function getName()
  {
    return $this->_name;
  }

//This is the getFirstname () method: it is responsible for returning the contents of the attribute $_firstname
  public function getFirstname()
  {
    return $this->_firstname;
  }

//This is the getAddress () method: it is responsible for returning the contents of the attribute $_address
  public function getAddress()
  {
    return $this->_address;
  }

//This is the getPeople () method: displays the three functions in one
  public function getPeople()
  {
    echo $this->getName(), " ", $this->getFirstname(), " ", $this->getAddress(),"<br />";
  }
}

$people1 = new people ("forrez"," cyril"," 9 rue leonard de vinci"); //first people
$people1->getPeople();
$people1->setAddress("blbblblblblblblblblbl"); //address change
$people1->getPeople();
unset($people1); //destroys the object
$people1->getPeople();
