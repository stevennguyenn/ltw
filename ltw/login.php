<?php

	require "connect.php";

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	class Student {
		function Student($id,$name,$email,$password,$avatar){
			$this -> id = $id;
			$this -> fullname = $name;
			$this -> email = $email;
			$this -> password = $password;
			$this -> avatar = $avatar;
		}
	}
	$student = Null;
	$query_accout = "SELECT * FROM User where email = '$email' and password = '$password'";
	$data = mysqli_query($con,$query_accout);
	if ($data){
		while ($row = mysqli_fetch_assoc($data)) {
			$student = new Student($row['id'],$row['name'],$row['account'],$row['password'],$row['avatar']);
		}
		if ($student != Null){
			echo json_encode($student);
			return;
		} else {
			echo json_encode(["message" => "Incorrect email or password"]);
			return;
		}
	}
	echo "Connect failed";
?>