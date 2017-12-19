<?php
	
	$emailTo = "adrianpdanao@gmail.com";

	$subject = "Hi Adrian";

	$body = "1v1 Shokugeki";

	$headers = "From: adrian.danao@obf.ateneo.edu";

	if (mail($emailTo, $subject, $body , $headers)){
		echo "Sent success!";
	}
	else{
		echo "Cannot be sent";
	}

?>