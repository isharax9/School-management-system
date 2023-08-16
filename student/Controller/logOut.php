<?php

	setcookie('flag', true, time()-1, '/'); 
	header('location: login.html');
	header('location: ../view/login.php');

?>