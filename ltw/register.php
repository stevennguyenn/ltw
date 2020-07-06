<?php
	require "connect.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$avatar = $_POST['avatar'];

	if (strlen($name) == 0){
		echo json_encode(["message" => "Please enter name"]);
		return;
	}

	if (strlen($email) == 0){
		echo json_encode(["message" => "Please enter email"]);
		return;
	} 

	if (strlen($password) == 0){
		echo json_encode(["message" => "Please enter password"]);
		return;
	}
	$query = "INSERT INTO User VALUES (null, '$email','$name','$password','$avatar')";
	echo $query;
	$data = mysqli_query($con, $query);
	if ($data){
		echo json_encode($data);
	} else {
		echo json_encode($data);
	}
?>