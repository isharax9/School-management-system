<?php

	setcookie('flag', true, time()-1, '/');
	header('location: ../View/LoginPage.php');

?>