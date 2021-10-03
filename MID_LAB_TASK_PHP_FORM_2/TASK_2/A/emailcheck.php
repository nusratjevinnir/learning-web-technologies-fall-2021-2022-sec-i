<?php 

	$email = $_REQUEST['myemail'];


	if($email != ""){
		echo $email;
	}else{
		echo "Null value...";
	}


?>