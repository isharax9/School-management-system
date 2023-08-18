<?php
	session_start();
	require_once('../model/noticeModel.php');
	if(isset($_POST['update']))
	{
    $id = $_SESSION['id'];
    $notice = $_POST['notice'];



						$userinfo = array('id' => $id,'notice' => $notice);
						$check = updateMyInfo($id, $userinfo);
						if($check)
						{
							echo "info updated!";
							header('location: ../view/viewNotice.php');
						}
						else
						{
							echo "Can't update the Information!";
						}

	}
?>
