<?php
  session_start();
  include_once('../model/adminModel.php');

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];


		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}
    else{
			if($password == $repass){
        if(strlen($id) == 4){
            if(strlen($password) > 7){
              for($j=0; $j<strlen($password); $j++){
                if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%') || ($password[$j] == '!')){
                  for($i=0; $i<strlen($name); $i++){
                    if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' '){
                      if(strlen($name) > 2){

                				$userinfo = [
                              'id'=>$id,
                							'name'=>$name,
                              'email'=> $email,
                							'password'=>$password

                						];

                            $result = insert($userinfo);
                            if($result){
                                header('location: ../view/adminlogin.php');
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
          echo "Id must contain 04 digits and integer number only";
        }
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
