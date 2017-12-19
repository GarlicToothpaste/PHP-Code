<?php

$myArray = array("Adrian", "Tonio", "Elmo");
$myArray = "Stanley Jason Galleta"
print_r($myArray); //Shows the contents of an opject

echo $myArray[1]; 

echo "<br>";

$coolArray[0] = "LTO";
$coolArray[1] = "LTRFB";
$coolArray[2] = "NLEX" ;
$coolArray[5] = "SLEX";
print_r($coolArray);

echo "<br>";

	$coolestArray = array(
		"Duterte" => "Coolest President", 
		"Noynoy" => "Weakest President"); //=> creates an index
unset($thirdArray["Duterte"]); //removes duterte from the array

print_r($coolestArray);

echo "<br>";

echo sizeOf($coolestArray);

?>