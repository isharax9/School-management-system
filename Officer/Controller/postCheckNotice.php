<?php
  session_start();
  include_once('../model/noticeModel.php');

	if(isset($_POST['submit'])){

    $notice = $_POST['notice'];


		if($notice == "" ){
			echo "null submission...";
		}else{

                        $userinfo = [
                            'notice'=>$notice
                        ];

                        $result = insert($userinfo);
                        if($result){
                          header('location: ../view/viewNotice.php');
                        }else{
                          echo "not insert";
                        }
                      }
	}
?>
