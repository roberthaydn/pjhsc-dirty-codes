<?php

/*

Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
Catch - A "catch" block retrieves an exception and creates an object containing the exception information

*/

class checkNumber {
//create function with an exception
	public function checkNum($number) {
	  if($number>1) {
	    throw new Exception("Value must be 1 or below");
	  }
	  return true;
	}
}

//trigger exception in a "try" block
try {
  $obj = new checkNumber;
  $obj->checkNum(11);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

?>