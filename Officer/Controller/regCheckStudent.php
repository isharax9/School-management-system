<?php
  session_start();
  include_once('../model/studentModel.php');
	if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address = $_POST['p_address'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];


		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""
    || $mobile == ""|| $gender == ""|| $dob == "" || $p_address == "" || $class == "" || $section == "" || $roll == "" ){
			echo "null submission...";
		}else{
			if($password == $repass){
        if(strlen($id) == 4){
          if(strlen($mobile) == 10){
            if(strlen($password) > 7){
              for($j=0; $j<strlen($password); $j++){
                if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%') || ($password[$j] == '!')){
                  for($i=0; $i<strlen($name); $i++){
                    if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' '){
                      if(strlen($name) > 2){
                  				$userinfo = [

                  							'name'=>$name,
                                'mobile'=>$mobile,
                                'email'=> $email,
                                'id'=>$id,
                  							'password'=>$password,
                                'gender'=>$gender,
                                'dob'=> $dob,
                                'p_address'=> $p_address,
                                'class'=> $class,
                                'section'=> $section,
                                'roll'=> $roll

                  						];

                              $result = insert($userinfo);
                              if($result){
                                  header('location: ../view/addStudent.php');
                              }else{
                                  echo "not insert";
                              }
                      }else {
                        echo "Name length should be greater than 2";
                      }
                    }else {
                      echo "Name contain only alphanumeric characters";
                    }
                  }

                }else {
                  echo "Password must contain a special character";
                }
              }
            }else {
              echo "Password length should be greater than 7";
            }

          }else {
            echo "Mobile must contain 11 digits and integer number only";
          }

        }else {
          echo "Id must contain 04 digits and integer number only";
        }
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
