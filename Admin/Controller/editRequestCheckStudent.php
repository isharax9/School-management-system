<?php
	session_start();
	require_once('../model/studentModel.php');
	if(isset($_POST['update']))
	{
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address = $_POST['p_address'];


		if(strlen($mobile) == 10){
			for($i=0; $i<strlen($name); $i++){
				if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' '){
					if(strlen($name) > 2){
						$userinfo = array('id' => $id,'name' => $name, 'email' => $email, 'mobile' => $mobile,'gender' => $gender,'dob' => $dob,'p_address' => $p_address);
						$check = updateEditInfo($id, $userinfo);
						if($check)
						{
							echo "info updated!";
              $deletemyinfo = deleteEditUserbyid($id);
							header('location: ../view/viewStudent.php');
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
		}else {
			echo "Mobile must contain 10 digits and integer number only";
		}

	}
?>
