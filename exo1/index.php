<?php

class citys
{
  private $_name;
  private $_department;

  public function display()
  {
    echo "the city of ", $this->getName(), " and in the Department of ", $this->getDepartment(),'<br />';
  }

  public function setName($name)  //Switch to modify the attribute $_name
  {

   $this->_name = $name;
  }

  public function setDepartment($department)  //Switch to modify the attribute $_ department
  {
  $this->_department = $department;
  }

//This is the name () method: it is responsible for returning the contents of the attribute $_name
  public function getName()
  {
    return $this->_name;
  }

//This is the name () method: it is responsible for returning the contents of the attribute $_name
  public function getDepartment()
  {
    return $this->_department;
  }
}

$city1 = new citys;  //First city
$city1->setName('Lille');
$city1->setDepartment('Nord');
$city1->display();

$city2 = new citys; // second city
$city2->setName('Montreal');
$city2->setDepartment('Quebec');
$city2->display();
