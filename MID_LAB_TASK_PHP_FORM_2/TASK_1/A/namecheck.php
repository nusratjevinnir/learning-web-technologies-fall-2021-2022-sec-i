<?php 

	$name = $_REQUEST['myname'];


	if($name != ""){
		echo $name;
	}else{
		echo "Null value...";
	}

?>