<?php
	
	function login($username, $password, $con){
	
	$sql = "SELECT username, id, usertype FROM hello where username = '$username' AND password = '$password'";
		$query = mysqli_query($con, $sql) or die(mysqli_error($con));

		$num  = mysqli_num_rows($query);
		

		if($num == 1){
			$credential = mysqli_fetch_assoc($query);
			echo "Match Found!";
			
			$_SESSION['loggedIn']= true;
			$_SESSION['username']= $credential['username'];
			$_SESSION['usertype']= $credential['usertype'];
			$_SESSION['is_logged_in']= true;
			$_SESSION['id']= $credential['id'];
			$_SESSION['token']= rand();

			if($credential['usertype'] == 'admin'){
				header("location:view.php");
			}
			else{
				header("location:userview.php");
			}
		}
	}

	function addUser($name, $address, $phone, $username, $password, $usertype, $con){
		$sql = "INSERT INTO hello (name, address, phone, username, password, usertype) 
				VALUES('$name', '$address', '$phone', '$username', '$password', '$usertype')";
	 	$query = mysqli_query($con, $sql) or die(mysqli_error($con));
	 	if ($query){
	 		return true;
	 	}
	 	else{
	 		return false;
	 	}

	}

	function getUser($id, $con){
		$sql = "SELECT * FROM hello where id = '$id'";
		$query = mysqli_query($con, $sql) or die(mysqli_error($con));

		$data = [];
		while ($row = mysqli_fetch_assoc($query)){
			array_push($data, $row);
		}
		return $data;
	}
?>