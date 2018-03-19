<link rel="stylesheet" type="text/css" href="style.css">
<?php
echo '<pre>';

//Returning a Random Set of Keys
echo '<span>Returning a Random Set of Keys</span>';
$states = array("Ohio" => "Columbus", "Iowa" => "Des Moines","Arizona" => "Phoenix");
$randomStates = array_rand($states, 2);
print_r($randomStates);

//Shuffling Array Elements
echo '<span>Shuffling Array Elements</span><br>';
$cards = array("jh", "js", "jd", "jc", "qh", "qs", "qd", "qc", "kh", "ks", "kd", "kc", "ah", "as", "ad", "ac");
shuffle($cards);
print_r($cards);

echo '<br>';

//Adding Array Values
echo '<span>Adding Array Values<br><br></span>';
$grades = array(42, "hello", 22);
$total = array_sum($grades);
print $total;

echo '<br><br>';

//Subdividing an Array
echo '<span>Subdividing an Array<br></span><br>';
$cards = array("jh", "js", "jd", "jc", "qh", "qs", "qd", "qc","kh", "ks", "kd", "kc", "ah", "as", "ad", "ac");
// shuffle the cards
shuffle($cards);
// Use array_chunk() to divide the cards into four equal "hands"
$hands = array_chunk($cards, 5);
print_r($hands);

2
while(list($k, $v) = each($hands)) {
	print("<span style='color:red'>{$k} - {$v} </span><br>");
	foreach ($v as $key => $value) {
		print("&nbsp; <span style='color:blue'>{$key} - {$value} </span><br>");
	}
}

echo '</pre>';
?>

