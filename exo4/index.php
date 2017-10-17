<?php

class form
{
  private $_form;
  private $_text;
  private $_fieldset;
  private $_submit;

  public function __construct()
  {
    $this->setFieldset();
    $this->setText();
    $this->setText();
    $this->setSubmit();
    $this->setForm();
  }

  public function getForm()
  {
    echo $this->getFieldset(), $this->getText(), $this->getSubmit();
  }

  public function getText()
  {
    return $this->_text;
  }

  public function getFieldset()
  {
    return $this->_fieldset;
  }

  public function getSubmit()
  {
    return $this->_submit;
  }

  public function setText()
  {
    $this->_text = '<br /><label>Entrez votre pseudo</label><input type=text />';
  }

  public function setFieldset()
  {
    $this->_fieldset = '<form methode=post><fieldset>Bonjour';
  }

  public function setSubmit()
  {
    $this->_submit = '<input type=submit />';
  }

  public function setForm()
  {
    $this->_form = ' </fieldset></form>';
  }
}

$form1 = new form;
$form1->getForm();

?>
