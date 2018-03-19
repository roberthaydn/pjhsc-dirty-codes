<?php
 
class Person {
 
  protected $name;
  protected $age;
  protected $talent;
 
  public function setName($name) {
    $this->name = $name;
    return $this;
  }
 
  public function setAge($age) {
    $this->age = $age;
    return $this;
  }

  public function setTalent($talent) {
  	$this->talent = $talent;
  	return $this;
  }
 
  public function __toString() {
    return "Hello, my name is ".$this->name." and I am ".$this->age." years old. My Talent is Playing ".$this->talent;
  }
 /*
  public function getAll() {
    return "Hello, my name is ".$this->name." and I am ".$this->age." years old. My Talent is Playing ".$this->talent;
  }
  */
}
 
$person = new Person;
echo $person->setName("Abriel")->setAge(21)->setTalent("Unknown"); // echo on object automatically calls magic method __toString()

//another Example
/*
class MyClass {
 
    function __construct() {
        $this->thing = "a";
    }
 
    function addB() {
        $this->thing .= "b";
        return $this;
    }
 
    function addC() {
        $this->thing .= "c";
        return $this;
    }
 
    function __tostring() {
        return $this->thing;
    }
 
}
 
$obj = new MyClass();
echo $obj->addB()->addC(); //outputs "abc"
echo $obj->addB(); //outputs "ab"
echo $obj->addC(); //outputs "ac"
echo $obj; //outputs "a"
*/