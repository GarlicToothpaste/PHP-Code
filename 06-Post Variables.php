<?php
	
	if($_POST){
	//print_r($_POST);
		$myArray = array("Adrian", "Carlo" , "Allan", "Kong");
		$value = false;

		foreach ($myArray as $value) {
			if($value == $_POST['name']){
				$value = true;
			}
		}
		
		if($value == true){
			echo "You are from Marist";
		}
		else{
			echo "You are not from Marist";
		}
	}

?>

<p>Please enter a name</p>

<form method ="post">

	<input name="name" type="name">
	<input type="submit" value="Go!">

</form>