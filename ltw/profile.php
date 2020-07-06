<?php
	require "connect.php";
	require "model/user.php";

	$id = $_GET['id'];

	$query = "SELECT id, name, email, avatar, address, phone  FROM Users where id = $id";
	$data  = mysqli_query($con,$query);

	$user = null;

	if ($data){
		while ($row = mysqli_fetch_assoc($data)) {
			$user = new User($row['id'], $row['name'], $row['email'], "", $row['avatar'], $row['address'], $row['phone']);
		}
		if ($user != null){
			echo json_encode($user);
			return;
		}
		echo "Access diened";
		return;
	}
	echo "Access diened";
?>