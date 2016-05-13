<!DOCTYPE html>

<?php
	include ('connect.php');
	include ('functions.php');
	session_start();
?>

<?php
	

	if(!$_SESSION['is_logged_in']){
		header("location:login.php");
	}

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype']; 	

		$flag = addUser($name, $address, $phone, $username, $password, $usertype, $con);
		if($flag){
			echo 'done';
			header("location:view.php");
		}
		else{
			echo 'Not Done';
		}
		
	}
?>


<head>
	<title></title>
</head>

<body>
	<form method ='POST' action=''>
				<label>NAME</label>
				<input name = 'name'>
				
				<label>ADDRESS</label>
				<input name = 'address'>
				
				<label>PHONE</label>
				<input name ='phone'>
				
				<label>Username</label>
				<input name ='username' type="text">
				
				<label>Password</label>
				<input name ='password' type ="password">
				
				<select name = 'usertype'>
					<option value='admin'>Admin</option>
					<option value='user'>User</option>
				 </select>
				<button name = 'submit' type = 'submit'>SUBMIT</button>

	</form>
</body>

