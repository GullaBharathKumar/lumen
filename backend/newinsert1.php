<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "Madhu@1044", "Registers");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$event_name = $_POST['event_name'];
		$event_date = $_POST['event_date'];
		$event_time = $_POST['event_time'];
		$event_location = $_POST['event_location'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO eventcreation VALUES ('$event_name',
			'$event_date','$event_time','$event_location')";
		
		if(mysqli_query($conn, $sql)){
			echo "";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>