<?php
	include('connect.php');
	echo 'PHP';
	echo "<br>";
	//$sql = "SELECT * FROM hello where name = 'jasmin'";
	 // $sql = "INSERT INTO hello (name, id, address, phone) VALUES('Mango','12345', 'Pepsicola', '9845182460')";
	 // $call = mysqli_query($con, $sql) or die(mysqli_error($con));
		// if ($call) {
		// 	echo "Sucess!";
		// 	# code...
		// }

	// $sql = "UPDATE hello SET name ='ranjit' where id = '90879'";
	// $call = mysqli_query($con, $sql);
	// if ($call) {
	// 	echo "update success!";
	// }
	$sql ="DELETE FROM hello where name ='pedu'";
	$call = mysqli_query($con, $sql);
	if ($call){
		echo "Delete success!";
	}

	// // // calls everything from hello table and stores in $call vairable
	// while($row = mysqli_fetch_assoc($call)){
	// 	echo "<pre>";
	// 	print_r($row);
	// 	echo "</pre>";
	// }
	// // print_r($call);
	// $user=mysqli_result($call);
	// echo "<pre>";
	// print_r($user);
	// echo "</pre>";
?>