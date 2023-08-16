<?php
	session_start();
	require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$ID = $_POST['ID'];
		$password = $_POST['password'];

		if($ID == "" || $password == ""){
			echo "null submission...";
		}else{

											$status = validateUser($ID, $password);
											if($status){
								
												$_SESSION['flag'] = true;
												//$_SESSION['id'] = $Id;
												setcookie('ID', $ID, time()+3600, '/');
												setcookie('flag', true, time()+3600, '/');
												
												$user = getUserById($Id);
												
												header('location: ../View/TeacherDashboard.php');
								
											}else{
												echo "invalid user";
											}
                                            
                                        
                                    


                            






			
		}

	}
?>