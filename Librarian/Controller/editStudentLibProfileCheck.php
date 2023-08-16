<?php
	session_start();
	require_once('../Model/usersmodel.php'); 
	if(isset($_POST['editstudentlibprofile']))
	{
		
	$roll = $_SESSION['roll'];
	
    $name = $_POST['name'];
    $mail = $_POST['mail'];

		$UpdateStudentLibProfile = array('name' => $name, 'mail' => $mail);
		$check = UpdateStudentLibProfile($roll, $UpdateStudentLibProfile);
		if($check)
		{
			echo "Your Profile updated!";
			header('location: ../View/viewAllStudentsLibProfile.php');
		}
		else
		{
			echo "Can't update your Library Account Profile!";
		}
		
	}
?>