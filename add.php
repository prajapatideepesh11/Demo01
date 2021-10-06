<!DOCTYPE html>
<html>

<head>
	<title>Insert Data</title>
	<link rel="stylesheet" href="mystyle.css">
</head>

<body>
	<center>
		<?php
		include 'connect.php';?>
		<?php
/*
		$conn = mysqli_connect("localhost", "root", "Qwer@1234", "demo01");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}*/
		
		// Taking all 5 values from the form data(input)
        $id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$department = $_REQUEST['department'];
		$age = $_REQUEST['age'];
	
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO employee VALUES ('$id','$name',
			'$department','$age')";
		
		if(mysqli_query($conn, $sql)){
			echo "<br><h3>Data Stored in a database successfully."
				. " Please browse your Database"
				. " to view the updated data</h3>";
        
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<a href="index.html"><button  class="button">Home</button></a>
	</center>
</body>

</html>
