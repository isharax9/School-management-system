<?php
	session_start();
	require_once('../model/adminModel.php');
	if(isset($_POST['submit']))
	{
    $id = $_COOKIE['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];


		for($i=0; $i<strlen($name); $i++){
			if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' '){
				if(strlen($name) > 2){
					$userinfo = array('id' => $id,'name' => $name, 'email' => $email);
					$check = updateMyInfo($id, $userinfo);
					if($check)
					{
						echo "info updated!";
						setcookie('name', $name, time()+3600, '/');
						header('location: ../view/EditProfile.php');
					}
					else
					{
						echo "Can't update the Information!";
					}

				}else {
					echo "Name length should be greater than 2";
				}
			}else {
				echo "Name contain only alphanumeric characters";
			}
		}


	}
?>
