<?php

	if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number']==round($_GET['number'],0)){
		//Checks if it is numberic, greater than zeo, and a whole number
		$i = 2;
		$isPrime = true;
		while($i < $_GET['number']) {

			if($_GET['number'] % $i == 0 ){
				//Number is not prime
				$isPrime = false;
			}

			$i++;
		}

		if($isPrime == true) {
			echo "<p>".$i." is a prime number: </p>";
		}
		else{
			echo "<p>".$i." is not prime.</p>";
		}
	}
	else {
		echo "<p> Invalid input</p>";
	}
?>

<p>Please enter a whole number</p>

<form>

	<input name="number" type="text">
	<input type="submit" value="Go!">

</form>s