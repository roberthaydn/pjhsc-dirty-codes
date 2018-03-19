<?php

 $value = pow(5,3); // returns 125
 echo $value.'<br>';

//
//function functionName(parameters)
//{
// function-body
//}


function generateFooter()
{
 echo "Copyright 2010 W. Jason Gilmore";
}

generateFooter();

echo '<br>';

//Passing Arguments by value
function calcSalesTax($price, $tax)
{
 $total = $price + ($price * $tax);
 echo "Total cost: $total<br>";
}
$priceTag = "321";
$priceTax = "0.323";
calcSalesTax(1000, 4);
calcSalesTax($priceTag, $priceTax);

echo '<br>';

//Passing arguments by reference
 $cost = 20.99;
 $tax = 0.0575;
 function calculateCost(&$cost, $tax)
 {
 // Modify the $cost variable
 $cost = $cost + ($cost * $tax);
 // Perform some random change to the $tax variable.
 $tax += 4;
 }
 calculateCost($cost, $tax);
 printf("Tax is %01.2f%% ", $tax*100);
 printf("Cost is: $%01.2f", $cost);

 echo '<br>';

 //Default argument values
 function calcSalesTaxx($price, $tax=.0675)#<==
{
 $total = $price + ($price * $tax);
 echo "Total cost: $total";
}
$pricetag = 15.47;
calcSalesTaxx($pricetag);

//TypeHinting
function processPayPalPayment(Customer $customer) {
 // Process the customer's payment
}

//Returning statement
function callReturn($hello, $world) {
	$string = $hello.' '.$world;
	return $string;
}

echo '<br>';

print(callReturn('hello', 'world'));

echo '<br>';

function calcSalesTaxxx($price, $tax=.0675)
{
 $total = $price + ($price * $tax);
 return $total;
}

 $price = 6.99;
 echo $total = calcSalesTaxxx($price);

echo '<br>';

 //Returning multiple values
$colors = array("red","blue","green");
list($red, $blue, $green) = $colors; 

echo '<br>';

//returning multiple values
function retrieveUserProfile($n="Jason Gilmore")
 {
 $user[] = $n;
 $user[] = "jason@example.com";
 $user[] = "English";
 return $user;
 }

 list($name, $email, $language) = retrieveUserProfile();
 echo "Name: $name, email: $email, language: $language";


//The Payment Calculator Function, amortizationTable()
 function amortizationTable($pNum, $periodicPayment, $balance, $monthlyInterest)
{
 // Calculate payment interest
 $paymentInterest = round($balance * $monthlyInterest, 2);
 // Calculate payment principal
 $paymentPrincipal = round($periodicPayment - $paymentInterest, 2);
 // Deduct principal from remaining balance
 $newBalance = round($balance - $paymentPrincipal, 2);
 // If new balance < monthly payment, set to zero
 if ($newBalance < $paymentPrincipal) {
 	$newBalance = 0;
 }
 printf("<tr><td>%d</td>", $pNum);
 printf("<td>$%s</td>", number_format($newBalance, 2));
 printf("<td>$%s</td>", number_format($periodicPayment, 2));
 printf("<td>$%s</td>", number_format($paymentPrincipal, 2));
 printf("<td>$%s</td></tr>", number_format($paymentInterest, 2));
 # If balance not yet zero, recursively call amortizationTable()
 if ($newBalance > 0) {
 $pNum++;
 amortizationTable($pNum, $periodicPayment,
 $newBalance, $monthlyInterest);
 } else {
 return 0;
 }
}
 // Loan balance
 $balance = 10000.00;
 // Loan interest rate
 $interestRate = .0575;
 // Monthly interest rate
 $monthlyInterest = $interestRate / 12;
 // Term length of the loan, in years.
 $termLength = 5;
 // Number of payments per year.
 $paymentsPerYear = 12;

 // Payment iteration
 $paymentNumber = 1;
 // Determine total number payments
 $totalPayments = $termLength * $paymentsPerYear;
 // Determine interest component of periodic payment
 $intCalc = 1 + $interestRate / $paymentsPerYear;
 // Determine periodic payment
 $periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) / (pow($intCalc,$totalPayments) - 1);
 // Round periodic payment to two decimals
 $periodicPayment = round($periodicPayment,2);
 // Create table
 echo "<table width='50%' align='center' border='1'>";
 echo "<tr>
 <th>Payment Number</th><th>Balance</th>
 <th>Payment</th><th>Principal</th><th>Interest</th>
 </tr>";
 // Call recursive function
 amortizationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest);
 // Close table
 echo "</table>";

?>
