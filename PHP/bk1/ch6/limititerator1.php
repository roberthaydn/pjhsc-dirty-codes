<?php

class limit {

	public function getlim() {

	$arr = array(
		array("name"=>"John Abraham", "sex"=>"M", "age"=>27),
		array("name"=>"Lily Bernard", "sex"=>"F", "age"=>37),
		array("name"=>"Ayesha Siddika", "sex"=>"F", "age"=>26),
		array("name"=>"Afif", "sex"=>"M", "age"=>2)
	);

		$persons = new ArrayObject($arr);
		$LI = new LimitIterator($persons->getIterator(),1,3);

		foreach ($LI as $person) {
			echo $person['name']." ".$person['sex']." ".$person['age'];
		}
	}
}

$objLmt = new limit;
$objLmt->getLim();

?>
