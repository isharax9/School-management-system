<?php
	session_start();
	require_once('../Model/DatabaseConnection.php');
	if(isset($_POST['update']))
	{
    $Id = $_SESSION['id'];
    $notice = $_POST['notice'];


    if($Id == "" || $notice == ""){
        echo "null submission...";
    }else{

           
        $userinfo = array('id' => $Id,'notice' => $notice);
        $check =  updateNotice($Id, $userinfo);
        if($check)
        {
            echo "info updated!";
            header('location: ../View/ViewNotice.php');
        }
        else
        {
            echo "Can't update the Information!";
        }
           

    }
					
			
		
    }
?>