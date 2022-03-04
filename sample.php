<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<style>
		.stl_adult{
			background-color: green;
			color:white;
			border: 3px dashed red;
			padding:20px;
		}
		.stl_child{
			background-color: red;
			color: white;
			border: 3px dashed green;
			padding:20px;
		}
		}
	</style>
</head>
<body>
<div id="results">
		<form method="post" action="#">
			<input type="date" name="dt" value="Enter your age" class="dt_val" id="dt_val"/>
			<input type="submit" value="Send" name="submit">
		</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$("form").on("submit", function(){
		var today = new Date();
		//alert(today); //Tue Oct 06 2020 17:36:03 GMT+0530 (India Standard Time)
		var dob = $("#dt_val").val();
		var birthDate = new Date(dob); //Mon Jun 06 2011 05:30:00 GMT+0530 (India Standard Time)
		//alert(birthDate);
		//alert( today.getFullYear()); //2020
		var age = today.getFullYear() - birthDate.getFullYear();		
		if(age >18){
			$("#results").text("Hello to adults screen").addClass("stl_adult");
		}
		else{
			$("#results").text("Hey kids not allowed").addClass("stl_child");
		}
	});
	</script>

</body>
</html>

 <!-- <?php 
	$date = date('Y-m-d', strtotime($_POST['dt']));
	$age = date('Y') - $date; 
	 if($age >18)
	 	echo 'Hello to adults screen';
	 else
	 	echo "Hey kid u are not allowed";
?> --> 


