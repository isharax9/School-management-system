<?php
	require_once('../Model/usersmodel.php'); 
	session_start();

	if(isset($_POST['addFine']))
	{
	$studentroll = $_SESSION['studentroll'];

	$returndate = $_POST['returndate'];
	$returnstatus = $_POST['returnstatus'];
	$addfine = $_POST['fine'];
	
		$addlatefine = array('addfine' => $addfine, 'returndate' => $returndate, 'returnstatus' => $returnstatus);
		$check = assignBookLateFine($studentroll,$addlatefine);
		
		if($check)
		{
			echo "Fine added!";
			header('location: ../View/issuedBookHistory.php');
		}
		else
		{
			echo "Can't add fine!";
		}
		
	}
?>