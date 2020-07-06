<?php
	class User {
		function User($id, $name, $email, $password, $avatar, $address, $phone, $is_admin){
			$this -> id = $id;
			$this -> fullname = $name;
			$this -> email = $email;
			$this -> password = $password;
			$this -> avatar = $avatar;
			$this -> address = $address;
			$this -> phone = $phone;
			$this -> is_admin = $is_admin;
		}
	}	
?>