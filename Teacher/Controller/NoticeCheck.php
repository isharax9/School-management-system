<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$notice = $_POST['notice'];

		if($notice == ""){
			echo "null submission...";
		}else{

            $user = [	
                'notice'=>$notice
                  ];

                      $status = insertNotice($user);

                       if($status){
                          header('location: ../View/NoticeBoard.php');
                      }else{
                        echo "error";
                      }

			
		}

















       







	}
?>