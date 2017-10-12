<?php

class citys
{
    private $_name;
    private $_department;

    public function __construct($name, $department)  //Constructor requesting 2 parameters
    {
      $this->setName($name); //Initialization of name
      $this->setDepartment($department); //Initialization of department

    }

    public function display()
    {
      //Message displayed after any object is created.
      echo "the city of ", $this->getName(), " and in the Department of ", $this->getDepartment(),'<br />';
    }

//Switch to modify the attribute $_name
    public function setName($name)
    {
        $this->_name = $name;
    }

//Switch to modify the attribute $_ department
    public function setDepartment($department)
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

$city1 = new citys('Lille', 'Nord'); //First city
$city1->display();

$city2 = new citys('Montreal', 'Quebec'); //Second city
$city2->display();
