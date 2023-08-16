<?php
    session_start();

    //require_once('../Model/StudentModel.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
        $ID = $_POST['id']; 
        $leave_from = $_POST['leave_from'];
        $leave_to = $_POST['leave_to'];
		


		if($name == "" || $ID == "" || $leave_from == ""|| $leave_to == ""){
			echo "null submission...";
		}
       
                         $user = [	
                                  'name'=>$name, 
                                   'id' => $ID,    
                                   'leave_from'=>$leave_from,
                                   'leave_to'=>$leave_to
                                                     
                                 ];
                                          $conn = mysqli_connect('localhost','root','','school_management_system');
                                          $sql = "insert into leave_request  values ( '','{$user['id']}', '{$user['name']}', '{$user['leave_from']}', '{$user['leave_to']}','')";
                                          $status = mysqli_query($conn, $sql);
                           
                                            if($status)
                                            {
                                                header('location: ../View/leaverequest.php');

                                            }else
                                            {
                                               echo "error";
                                            
                                            }

                                              
                                      
   }
?>