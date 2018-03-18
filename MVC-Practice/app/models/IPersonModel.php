<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:28pm
  * Description:
      Serves as the abstraction for Person.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	interface IPersonModel {
/*
*  setter
*/
  public function setID($id);
  public function setUsername($username);
  public function setFirstName($firstName);
  public function setLastName($lastName);
  public function setPassword($password);
  public function setGender($gender);
  public function setAge($age);
  public function setSalary($salary);
  public function setAbsent($absent);
  public function setStatus($status);

/*
*  getter
*/
  public function getID();
  public function getUsername();
  public function getFirstName();
  public function getLastName();
  public function getPassword();
  public function getGender();
  public function getAge();
  public function getSalary(); 
  public function getAbsent();
  public function getStatus();

}
