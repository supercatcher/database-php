<?php
	$con=mysqli_connect("localhost", "root", "jasmin", "jasmin");
	//localhost, root, password and database name 

	//Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:" . mysqli_connect_error ();

	}
	else {
		//echo "Connection successful!";
	}

	?>