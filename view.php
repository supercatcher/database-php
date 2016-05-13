<?php
	include ('connect.php');
	session_start();

	if(!$_SESSION['loggedIn']){
		header("location:login.php");
	}

	if ($_SESSION['usertype'] != 'admin'){
		header("location : userview.php");
	}

	$sql = 'SELECT * FROM hello';
	$query = mysqli_query($con, $sql);
?>
<?php print_r($_SESSION); ?>
<html>
	<head></head>
	<body>
		<h2>Welcome <?php echo $_SESSION['username'  ]?></h2>
		<table border="1">
			<tr>
				<th>name</th>
				<th>id</th>
				<th>address</th>				
				<th>phone</th>
				<th>usertype</th>
			</tr>
			
			<?php while($row = mysqli_fetch_assoc($query)){ ?>
				<tr>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo $row['phone']?> </td>
					<td><?php echo $row['usertype']?></td>
					<td> <a href = 'update.php?id=<?php echo $row['id']?>'> edit </a></td>
					<td><a href = 'delete.php?id=<?php echo $row['id']?>'>delete</a></td>

				</tr>
			<?php } ?>
		</table>
		<table border="1">
			<tr>
				<td><a href="addUser.php">Add User</a></td>
				<td><a href="logout.php">Logout</a></td>
			</tr>
		</table>
	</body>
</html>   