<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: OfficerLogin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<style>
        .error{
            border: 3px solid red;
        }
        .success{
            border: 3px solid green;
        }
    </style>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>