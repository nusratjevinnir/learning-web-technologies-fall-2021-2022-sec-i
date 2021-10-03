<?php 

	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
		if($name != ""){
			echo $name;
		}else{
			echo "Null value...";
		}
	}

?>


<html>
<head>
	<title>NAME</title>
</head>
<body>
	<form method="post" >
		Username: <input type="text" name="myname" value=""/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>