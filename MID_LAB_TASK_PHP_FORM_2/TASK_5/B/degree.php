<?php 

	
	if(isset($_REQUEST['submit'])){
		$radio = $_REQUEST['mydegree'];
		
	}

?>


<html>
<head>
	<title>DEGREE</title>
</head>
<body>
	<form method="post" >
	        Dept:
			<select name="">
				<option value="">COE</option>
				<option value="">CSE</option>
				<option value="">CIS</option>
				<option value="">CSSE</option>
			</select>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>