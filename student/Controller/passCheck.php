<?php

	require_once('../model/DatabaseConnection.php'); 

	if(isset($_POST['Change']))
	{

		if($_POST['cpas'] == "" || $_POST['npass'] == "" || $_POST['rnpass'] == "")
		{
			echo "null submission...";
		}
		elseif($_POST['npass'] != $_POST['rnpass'])
		{
			echo "New password and Retype New password mismatch!";
		}
		else
		{
			session_start();
			$User = getUserById($_COOKIE['id']);
			$id = $User['id'];
			$password = $User['password'];
			$newPass = $_POST['npass'];
			if($_POST['cpas'] != $password)
			{
				echo "Your entered current password is wrong";
			}
			else
			{
				if(strlen($newPass) > 7){
					for($j=0; $j<strlen($newPass); $j++){
						if(($newPass[$j] == '@') || ($newPass[$j] == '#') || ($newPass[$j] == '$') || ($newPass[$j] == '%') || ($newPass[$j] == '!')){
							$check = changePassword($id, $newPass);
							if($check)
							{
								echo "Password changed!";
								header('location: ../Controller/logout.php');
							}
							else
							{
								echo "Error occured!";
							}
						}else {
							echo "Password must contain a special character";
						}
					}
				}else {
					echo "Password length should be greater than 7";
				}
			}
		}

	}

?>