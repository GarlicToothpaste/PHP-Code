<?php

	$i = 1;
	//Outputs the table of 5
	while($i <= 10){
		echo $i * 5;
		echo "<br>";
		$i++;
	}

	$myArray = array("Adrian", "JGOD", "Elmo", "King");
	
	$x = 0;
	while($x < sizeOf($myArray)){
		echo $myArray[$x]."<br>";
		$x++;
	}
?>
