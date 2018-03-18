<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 01:12am
  * Description:
      Serves as the model for Person.
  * Changes: 
      id and lastname properties.
  * Notes:

  * Warning:
*/
include_once('IPersonModel.php');

class PersonModel implements IPersonModel{

  private $_id,
          $_username,
          $_firstName,
          $_lastName,
          $_password,
          $_gender,
          $_age,
          $_salary,
          $_absent,
          $_status;

/*
*  setter
*/
  public function setID($id){
    $this->_id = $id;
  }
  public function setUsername($username) {
    $this->_username = $username;
  }
  public function setFirstName($firstName) {
    $this->_firstName = $firstName;
  }
  public function setLastName($lastName){
    $this->_lastName = $lastName; 
  }
  public function setPassword($password){
    $this->_password = $password; 
  }
  public function setGender($gender) {
    $this->_gender = $gender;
  }
  public function setAge($age) {
    $this->_age = $age;
  } 
  public function setSalary($salary) {
    $this->_salary = $salary;
  }
  public function setAbsent($absent) {
    $this->_absent = $absent;
  }
  public function setStatus($status) {
    $this->_status = $status;
  }

/*
*  getter
*/
  public function getID(){
    return $this->_id;
  }
  public function getUsername() {
    return $this->_username;
  }
  public function getFirstName() {
    return $this->_firstName;
  }
  public function getLastName(){
    return $this->_lastName; 
  }
  public function getPassword(){
    return $this->_password; 
  }
  public function getGender() {
    return $this->_gender;
  }
  public function getAge() {
    return $this->_age; 
  } 
  public function getSalary() {
    return $this->_salary; 
  }
  public function getAbsent() {
    return $this->_absent; 
  }
  public function getStatus() {
    return $this->_status; 
  }  
}

/*
$p = new PersonModel();
$p->setID(12);
$p->setUsername('jose123');
$p->setFirstname('joselito');
$p->setLastName('gelilang');
$p->setPassword('password');
$p->setGender('male');
$p->setAge(32);
$p->setSalary(123123);
$p->setAbsent(3);
$p->setStatus('single');

echo $p->getID();
echo $p->getUsername();
echo $p->getFirstname();
echo $p->getLastName();
echo $p->getPassword();
echo $p->getGender();
echo $p->getAge();
echo $p->getSalary();
echo $p->getAbsent();
echo $p->getStatus();
*/


