<?php
session_start();
require_once('../Model/usersmodel.php');
if(isset($_POST['login'])){
    $Officerid = $_POST['Officerid'];
    $password = $_POST['password'];
    if($Officerid == ""){
		echo "Enter Officer Id";
	}else{
		if($password == ""){
			echo "please, Enter Password";
		}else{
		      	$status = validateUser($Officerid,$password);
            if($status){
            $_SESSION['flag'] = true;
            $_SESSION['Officerid'] = $Officerid;
            $_SESSION['password'] = $password;
            header('location: ../View/dashboard.php');
          }else{
            echo "failed to login!";
          }
		}

	}
}

?>