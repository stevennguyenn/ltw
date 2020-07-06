<?php

	require "connect.php";
	require "model/user.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = Null;
	$query_accout = "SELECT * FROM Users where email = '$email' and password = '$password' limit 1";
	$data = mysqli_query($con,$query_accout);
	if ($data){
		while ($row = mysqli_fetch_assoc($data)) {
			$user = new User($row['id'],$row['name'],$row['email'],$row['password'],$row['avatar'], $row['address'], $row['phone'], $row['is_admin']);
		}
		if ($user != Null) {
			echo json_encode($user);
			return;
		} else {
			echo json_encode(["message" => "Incorrect email or password"]);
			return;
		}
	}
	echo "Connect failed";
?>