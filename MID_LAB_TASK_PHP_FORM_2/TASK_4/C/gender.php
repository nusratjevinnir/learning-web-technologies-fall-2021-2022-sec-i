<?php 

	
	if(isset($_REQUEST['submit'])){
		$radio = $_REQUEST['mygender'];
		if($radio != ""){
			echo $radio;
		}else{
			echo "Null value...";
		}
	}

?>


<html>
<head>
	<title>GENDER</title>
</head>
<body>
	<form method="post" >
		Gender: 
		<input type="radio" name="gender" value=""> Male
		<input type="radio" name="gender" value=""> Female
		<input type="radio" name="gender" value=""> Other
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>