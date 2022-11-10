<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "onlineexaminationsystem");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$module_code = $_REQUEST['module_code'];
		$student_number = $_REQUEST['student_number'];
		$exam_date = $_REQUEST['exam_date'];
		$start_time = $_REQUEST['start_time'];
        $upload_time = $_REQUEST['upload_time'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO examoutput VALUES ('',
			'$start_time','$upload_time','$student_number','$module_code')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$exam_date\n $start_time\n "
				. "$upload_time\n $student_number\n $module_code");
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
