<?php
 
class Person
{
  private $_name;
  private $_job;
  private $_age;
  private $_game;

  public function __construct($name, $job, $age, $game)
  {
      $this->_name = $name;
      $this->_job = $job;
      $this->_age = $age;
      $this->_gamer = $game;
  }
 
  public function changeJob($newjob)
  {
      $this->_job = $newjob;
  }
 
  public function happyBirthday()
  {
      ++$this->_age;
  }

  public function changeGamer($newgamer) {
      $this->_game = $newgamer;
  }
}
 
// Create two new people
$person1 = new Person("Tom", "Button-Pusher", 34, "dota1");
$person2 = new Person("John", "Lever Puller", 41, "dota2");
 
// Output their starting point
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Give Tom a promotion and a birthday
$person1->changeJob("Box-Mover");
$person1->happyBirthday();
$person2->changeGamer("tetris");

 
// John just gets a year older
$person2->happyBirthday();
 
// Output the ending values
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
?>