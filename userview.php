<?php
	include ('connect.php');
	include ('functions.php');
	session_start();

	if(!$_SESSION['loggedIn']){
		header("location:login.php");
	}

	$users = getUser($_SESSION['id'], $con);
	//var_dump($users);

?>


<html>
	<head><H1> asdghjfkgnhsdjefrkndb </H1></head>
	<body>
		<h2>Welcome <?php echo $_SESSION['username'  ]?></h2>
			<table border="1">
			<tr>
				<th>name</th>
				<th>id</th>
				<th>address</th>
				<th>phone</th>
			</tr>

			<tr>
			    <?php foreach($users as $user){ ?>
					<td><?php echo $user['name'] ?></td>
					<td><?php echo $user['id']?></td>
					<td><?php echo $user['address']?></td>
					<td><?php echo $user['phone']?> </td>
				<?php } ?>
			</tr>

			<table border="1">
			<tr>
				<td><a href="logout.php">Logout</a></td>
			</tr>
		</table>
	</body>
</html> 