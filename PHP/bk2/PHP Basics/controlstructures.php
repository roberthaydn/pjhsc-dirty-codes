<?php
 //IF STATEMENT
 $secretNumber = 453;
 if (@$_POST['guess'] == $secretNumber) {
 echo "<p>Congratulations!</p>";
 } else {
 echo "LOL";
 }
 //CASE BREAK
 $category = "weather";
 switch($category) {
 case "news":
 echo "<p>What's happening around the world</p>";
 break;
 case "weather":
 echo "<p>Your weekly forecast</p>";
 break;
 case "sports":
 echo "<p>Latest sports highlights</p>";
 break;
 default:
 echo "<p>Welcome to my web site</p>";
 }
 echo '<br><br>';
 //WHILE LOOP
 $count = 1;
 while ($count <= 5) {
 printf("%d squared = %d <br />", $count, pow($count, 2));
 $count++;
 }
 
 echo '<br>';
 //DO WHILE LOOP
 $count = 10;
 do {
 printf("%d squared = %d <br />", $count, pow($count, 2));
 } while ($count < 10);

 $countss = 0;
 while (1) {
     echo $countss++.'<br>';
     if($countss==7) {
        break;
     }
 }
 
 $do = 1;
 do {
    echo $do++;
 } while ($do < 10);

echo '<br><br>';
//FOR LOOP
 // Example One
for ($kilometers = 1; $kilometers <= 5; $kilometers++) {
 printf("%d kilometers = %f miles <br />", $kilometers, $kilometers*0.62140);
}

echo '<br><br>';

// Example Two
for ($kilometers = 1; ; $kilometers++) {
 if ($kilometers > 5) break;
 printf("%d kilometers = %f miles <br />", $kilometers, $kilometers*0.62140);
}

echo '<br><br>';

// Example Three
$kilometers = 1;
for (;;) {
 // if $kilometers > 5 break out of the for loop.
 if ($kilometers > 5) break;
 printf("%d kilometers = %f miles <br />", $kilometers, $kilometers*0.62140);
 $kilometers++;
}

echo '<br><br>';

$store = 1;
$add = 3;

for($x = 2; $x <= $add; $x++) {
    $total = $store *= $x;
}
printf("The factorial of %d is %d ", $add, $total);

echo '<br><br>';


$add = 10;
$temp = 1;

for(;;) {
    if($temp==51) break;
    $temp += $add;
    echo $temp.' ';
}

echo '<br><br>';

//FOREACH LOOP
$arrayName = array(1 => 'Naix', 2 => 'Yurnero',  3 => 'Traxex');
foreach ($arrayName as $key => $value) {
    echo $value.'<br>';
}

echo '<br><br>';

$links = array("www.facebook.com", "www.google.com", "wwww.twitter.com");
foreach ($links as $link) {
    echo "<a href=\"http://$link\" target=\"_blank\"\">$link</a><br>";
}

echo '<br><br>';
//Break and Goto Statements

 $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
 for($count = 1; $count < 100; $count < 1000) {
 $randomNumber = rand(1,50);
 if (in_array($randomNumber,$primes)) {
 printf("prime number found: %d <br />", $randomNumber);   
 break;
 } else {
 printf("Non-prime number found: %d <br />", $randomNumber);
 }
 }

echo '<br><br>';

for ($c = 0; $c < 10; $c++)
{
 $randomNumber = rand(1,50);
 if ($randomNumber < 10)
 goto less;
 else
 echo "Number greater than 10: $randomNumber<br />";
}

less:
 echo "Number less than 10: $randomNumber<br />";

echo '<br><br>';

 $usernames = array("Grace","Doris","Gary","Nate","missing","Tom");
 for ($x=0; $x < count($usernames); $x++) {
 if ($usernames[$x] == "missing") continue;
 printf("Staff member: %s <br />", $usernames[$x]);
 }


// include(/path/to/filename)
// include "/usr/local/lib/php/wjgilmore/init.inc.php";
//require will throw a PHP Fatal Error if the file cannot be loaded. (Execution stops)
//include produces a Warning if the file cannot be loaded. (Execution continues)

 
?>




