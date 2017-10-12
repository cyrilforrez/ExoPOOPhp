<?php

class citys
{
  private $_name;
  private $_department;

  public function display()
  {
    echo "the city of ", $this->name(), " and in the Department of ", $this->department(),'<br />';
  }

  public function setName($name)  //Switch to modify the attribute $_name
  {

   $this->_name = $name;
  }

  public function setDepartment($department)  //Switch to modify the attribute $_ department
  {
  $this->_department = $department;
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
