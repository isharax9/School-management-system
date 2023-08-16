<?php
	session_start();
	require_once('../Model/DatabaseConnection.php');
	if(isset($_POST['submit']))
	{
    $Id = $_COOKIE['ID'];
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dd = $_POST['dob'];


    if($name == "" || $email == "" || $mobile == "" || $gender == "" || $dd == ""){
        echo "null submission...";
    }else{
              

            if(strlen($mobile) == 10)
            {

                for($i=0; $i<strlen($name); $i++){
                    if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90)){
                        if(strlen($name) > 2){
                            $userinfo = array('ID' => $Id,'uname' => $name, 'email' => $email, 'mobile' => $mobile, 'gender' => $gender, 'dob' => $dd);
                            $check = updateProfile($Id, $userinfo);
                            if($check)
                            {
                                echo "info updated!";
                                header('location: ../View/EditProfile.php');
                            }
                            else
                            {
                                echo "Can't update the Information!";
                            }
        
                        }else {
                            echo "Name length should be greater than 2";
                        }
                    }else {
                        echo "Name contain only alphanumeric characters";
                    }
                }


            }else{
                echo "Mobile number not valid (must contain 11 digits and integer number only) ";
            }

            
    }



	}
?>