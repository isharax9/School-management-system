<?php
  session_start();
  include_once('../model/OfficerModel.php');
	if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];


		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""|| $mobile == ""|| $gender == ""|| $dob == ""){
			echo "null submission...";
		}else{
      if($password == $repass){
      
                        $userinfo = [
                            'name'=>$name,
                            'mobile'=>$mobile,
                            'email'=> $email,
                            'id'=>$id,
                            'password'=>$password,
                            'gender'=>$gender,
                            'dob'=>$dob
                        ];

                        $result = insert($userinfo);
                        if($result){
                          header('location: ../view/addOfficer.php');
                        }else{
                          echo "not insert";
                        }


			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
