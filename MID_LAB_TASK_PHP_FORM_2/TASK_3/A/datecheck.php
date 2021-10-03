<?php 

	$date = $_REQUEST['mydateofbirth'];


	if($date != ""){
		echo $date;
	}else{
		echo "Null value...";
	}


?>