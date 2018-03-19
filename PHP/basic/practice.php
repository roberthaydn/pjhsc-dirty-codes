<?php
 
class Hero {

  private $_hero1;
  private $_hero2;
  private $_hero3;
  private $_hero4;
  private $_hero5;

  public function __construct() {
    $this->getHero();
    echo '<pre>'.print_r($this, TRUE).'</pre>';
  }

  public function getHero() {
    $this->_hero1 = "Zues";
    $this->_hero2 = "Tinker";
    $this->_hero3 = "Balanar";
    $this->_hero4 = "Vengeful";
    $this->_hero5 = "Spectre";
  }

}

class anotherClass extends Hero {

  public function __construct() {
    parent::__construct();
  }
}

$anotherClass = new anotherClass();
$anotherClass->getHero();


?>