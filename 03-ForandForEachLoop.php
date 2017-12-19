<?php

$CSBoyz = array("Elmo", "JGOD", "King", "Adrian");

foreach ($CSBoyz as $key => $value) {

	$CSBoyz[$key] = $value. " is Pogi"; // will be appended on the second for loop
	echo "Array item ".$key." is ".$value;
	echo "<br>";

}

echo "<br>";

for ($i = 0 ; $i < sizeOf($CSBoyz); $i++){
	echo "$CSBoyz[$i]";
	echo "<br>";
}

echo "<br>";

for ($i = 10 ; $i >= 0 ; $i--){
	echo $i."<br>";
}

?>