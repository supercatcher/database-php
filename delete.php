<?php
	include ('connect.php');

	$id = $_GET['id'];


	if(isset($id)){
		
		$id = $_POST['id'];
		
		$delSql = "DELETE FROM hello where  id = '$id'";
		echo "DElete sql";
		$delQuery = mysqli_query($con, $delSql);
	 }

	
	if($delQuery){
		echo "Deleted";
		header("location: view.php");
	}
	else{
		echo "Try again later";
	}
?>
