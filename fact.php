<?php

if(isset($_POST['submit'])){
  $number= $_POST["number"];
  $fact=1;
  for($i=1;$i<=$number;$i++)
  {
  	$fact= $fact*$i;
  }
echo 'Factorial of '. $number. ' is ' .$fact;
}
?>








<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#">
	<label>Please Enter no.</label>
		<input type="text" name="number">
		<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>