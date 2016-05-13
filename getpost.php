 <?php
	include('connect.php');
	include('functions.php');
// 	$name = 'saugat';
// 	$id = 12341;
// 	$address ='kapan';
// 	$phone ='9843598124';
	
// 	$sql = "INSERT INTO hello (name, id, address, phone) VALUES ('$name', '$id', '$address', '$phone')";
// 	$query = mysqli_query($con, $sql);
// 	if ($sql){
// 		echo 'Successful entry';
// 	}
// 	else {
// 		echo 'try again';
//}
	//print_r($_POST);
	// echo $_POST['id'];
	// echo "<br>";
	// echo $_POST['name'];
	// echo "<br>";
	// echo $_POST['address'];
	// echo "<br>";
	// echo $_POST['phone'];
 	//print_r($_POST);

 	if(isset($_POST['submit'])){
	 	$name = $_POST['name'];
	 	$address = $_POST['address'];
	 	$phone = $_POST['phone'];
	 	$username = $_POST['username'];
	 	$password = SHA1($_POST['password']);
	 	echo "Done!";
	 	adduser($name, $address, $phone, $username, $password, $con);
	 	}
	?>

	<html>
		<head>
			<h1>GETPOST</h1>
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
				<input name ='password' type="password">
				<button name = 'submit' type = 'submit'>SUBMIT</button>
			</form>
		</body>
	</html>