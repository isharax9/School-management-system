<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['upload'])){

		$Id = $_SESSION['id'];
        $marks = $_POST['marks'];

		if($marks == ""){
			echo "null submission...";
		}else{


			if(is_numeric($marks) && strlen($marks) >= 2 && strlen($marks) <= 3 && $marks <=100)
			{

				$userinfo = array('id' => $Id,'marks' => $marks);
				$check =  updateMarks($Id, $userinfo);
				if($check)
				{
					echo "Marks updated!";
					header('location: ../View/StudentListMarks.php');
				}
				else
				{
					echo "Can't update the Information!";
				}

			}else{
				echo "Marks should be integer only and length should be equal to 3 digits ";
			}

			
		}

















       







	}
?>