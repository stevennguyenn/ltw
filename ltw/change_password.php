<?php
	require "connect.php";

	$id = $_POST['id'];
	$currentPassword = $_POST['current_password'];
	$newPassword = $_POST['new_password'];

	$query1 = "SELECT count(*) as Count FROM Users WHERE id = $id AND password = $currentPassword";
	
	$number = mysqli_query($con,$query1);
	if ($number){
		$result = null;
		while ($row = mysqli_fetch_assoc($number)){
			$result = (int) $row['Count'];
		}
		if ($result == null){
			echo json_encode(["message" => "Change password failed"]);
			return;
		}
		$query2 = "UPDATE Users SET password = $newPassword WHERE id = $id";
		$data = mysqli_query($con,$query2);
		if ($data){
			echo json_encode(["message" => "Change password successed"]);
		}
		return;
	}	
	echo "Connect Failed"
?>