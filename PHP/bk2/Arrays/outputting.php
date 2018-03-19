<?php
//foreach 
$states = array("Ohio", "Florida", "Texas");
foreach ($states AS $state) {
 echo "{$state}<br />";
}

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
foreach ($customers AS $customer) {
 vprintf("<p>Name: %s<br />E-mail: %s<br />Phone: %s</p>", $customer);
	/*echo '<p>Name: '.$customer[0].'<br/>
			 E-mail: '.$customer[1].'<br/>
			 Phone: '.$customer[2].'<br/>
	</p>';*/
//          v1 v2 v3 <= value of an array();
// vprintf("%s %s %s", $customer);
// Printing Arrays for Testing Purposes
//print_r($customer, FALSE);
}


?>

