<?php
	include ('connect.php');
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM hello where id ='$id'";
	$query = mysqli_query($con, $sql);

	if ($query){
		echo "Query running.";
	}

	if (isset($_POST['update'])){
		var_dump($_POST);
		$name = $_POST['name'];
		$id = $_POST['id'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$usertype = $_POST['usertype'];

		$updateSql = "UPDATE hello SET name = '$name', address = '$address', phone = '$phone', usertype = '$usertype' WHERE id = '$id'  ";
			echo $updateSql;
		
		$UpdateQuery = mysqli_query($con, $updateSql) or die(mysqli_error($con));
			if ($UpdateQuery){
				echo "New value updated!";
				header("location: view.php");
			}
			else {
				echo "Function not completed";
			}
	}
?>

<html>
		<head>
			<h1></h1>
		</head>
		<body>
		<?php while ($row = mysqli_fetch_assoc($query)){ ?>
			<form method ='POST' action=''>
				<label>NAME</label>
				<input name = 'name' value= "<?php echo $row['name']?>">
				<br>

				<input type = "hidden" name = 'id' value= "<?php echo $row['id']?>">
				<br>

				<label>ADDRESS</label>
				<input name = 'address' value="<?php echo $row['address'] ?>">
				<br>

				<label>PHONE</label>
				<input name ='phone' value="<?php echo $row['phone']; ?>">
				<br>

				<select name = 'usertype'>
					<option value='admin'>Admin</option>
					<option value='user'>User</option>
				 </select>
				<br>

				<button name = 'update' type = 'submit'>UPDATE</button>
			</form>
		<?php } ?>
		</body>
	</html>