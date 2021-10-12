<?php 

	$blood = $_REQUEST['mybloodgroup'];


	if($blood != ""){
		echo $blood;
	}else{
		echo "Null value...";
	}


?>