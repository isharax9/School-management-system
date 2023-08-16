<?php
session_start();
require_once('../Model/usersmodel.php');
if(isset($_POST['login'])){
    $librarianid = $_POST['librarianid'];
    $password = $_POST['password'];
    if($librarianid == ""){
		echo "Enter Librarian Id";
	}else{
		if($password == ""){
			echo "please, Enter Password";
		}else{
		      	$status = validateUser($librarianid,$password);
            if($status){
            $_SESSION['flag'] = true;
            $_SESSION['librarianid'] = $librarianid;
            $_SESSION['password'] = $password;
            header('location: ../View/dashboard.php');
          }else{
            echo "failed to login!";
          }
		}

	}
}

?>