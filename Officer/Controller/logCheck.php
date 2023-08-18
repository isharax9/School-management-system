<?php

	include_once('../model/adminModel.php');
	session_start();
	// $myfile = fopen('../Model/admin.json', 'r');
	// $data = fread($myfile, filesize('../Model/admin.json'));

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			// $users = json_decode($data, true);
			// if($id == $users['id'] && $password == $users['password']){

			$status = validateUser($id, $password);
			if($status){

					$profile = getUserbyid($id);
					$name = $profile['name'];
					setcookie('id', $id, time()+3600, '/');
					setcookie('name', $name, time()+3600, '/');
					setcookie('flag', true, time()+3600, '/');
					header('location: ../view/dashboard.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>
