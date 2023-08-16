<?php
	session_start();
	require_once('../model/courseModel.php');
	if(isset($_POST['update']))
	{
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $description = $_POST['description'];


						$userinfo = array('id' => $id,'course_name' => $name, 'class' => $class, 'description' => $description);
						$check = updateMyInfo($id, $userinfo);
						if($check)
						{
							echo "info updated!";
							header('location: ../view/viewCourse.php');
						}
						else
						{
							echo "Can't update the Information!";
						}

	}
?>
