<?php 
	include ('connect.php');
	include 'functions.php';
	session_start();

// 	if(isset($_SESSION['is_logged_in'])){
// 	if($_SESSION['is_logged_in']){
// 		header('location: view.php');
// 	}

// }
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = SHA1($_POST['password']);

		login($username, $password, $con);
	}
?>



<html>
	<head></head>
	<body>
		<div id = "wrapper">
			<div id ="loginform">
				<form method="POST">	
				<label>Username</label>
				<input name = 'username' type ='text'>
				<label>Password</label>
				<input name = 'password' type ='password'>
				<button type = 'submit' name='submit'>Login</button>
				</form>
				</div>
			</div>
	</body>
</html>