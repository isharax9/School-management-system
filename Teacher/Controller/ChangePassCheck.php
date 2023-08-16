<?php

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['Change']))
	{

		$pass = $_POST['password'];
        $newpass =$_POST['newpassword'];
        $repass = $_POST['repassword'];

		if($pass == "" and $newpass == "" and $repass == ""){
			echo "null submission";
    }elseif($pass != $newpass and $newpass == $repass){


		if(strlen($newpass) > 7)
		{

			for($j=0;$j<strlen($newpass);$j++)
			{
				
			   
				if(($newpass[$j] == '@') || ($newpass[$j] == '#') || ($newpass[$j] == '$') || ($newpass[$j] == '%'))
				{
					//session_start();
					$User = getUserById($_COOKIE['ID']);
					$Id = $User['id'];
					$password = $User['password'];
					$newpass = $_POST['newpassword'];
					if($_POST['password'] != $password)
					{
						echo "Your entered current password is wrong";
					}
					else
					{
						$check = updatePassword($Id, $newpass);
						if($check)
						{
							echo "Password changed!";
							header('location: ../Controller/Logout.php');
						}
						else
						{
							echo "Error occured!";
						}
					}
					
				}
			   
			}

		}else{
			echo "Password not valid (must contain a special character and length should be greater than 7) ";
		}

		}else {
      echo "Invalid Password";
    }
	}


?>