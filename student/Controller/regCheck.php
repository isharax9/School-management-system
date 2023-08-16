<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
        $email = $_POST['email']; 
        $mobile = $_POST['mobile'];
        $ID = $_POST['id']; 
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $gender = $_POST['gender'];
        $dd = $_POST['dob'];
		$paddress = $_POST['paddress'];
		$class = $_POST['class'];
		$section = $_POST['section'];
		$roll = $_POST['roll']; 


		if($name == "" || $email == "" || $mobile == "" || $ID == "" || $password == "" || $confirm == "" || $gender == "" || $dd == ""|| $paddress == ""|| $class == ""|| $section == ""|| $roll == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

				

                        function FormValidation()
                        {
                            if(isset($_POST['name']))
                            {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['id'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
								$paddress = $_POST['paddress'];
		                        $class = $_POST['class'];
		                        $section = $_POST['section'];
		                        $roll = $_POST['roll'];

                                $Validation = false;



                                if(strlen($ID) == 4)
                                {

                                    if(strlen($mobile) == 10)
                                {

                                    if(strlen($password) > 7)
                                {

                                    for($j=0;$j<strlen($password);$j++)
                                    {
                                        
                                       
                                        if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                                        {


                                            if(strlen($name) > 2)
                                            {
   
                                               for($i=0;$i<strlen($name);$i++)
                                               {
                                           
                                                   if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ($name[$i] == ' '))
                                                   {
                                              
                                                       $Validation = true;
       
       
                                                       $user = [	
                                                       'name'=>$name, 
                                                       'mobile'=>$mobile,
                                                       'id' => $ID,
                                                       'gender'=>$gender,
                                                       'password'=>$password, 
                                                       'email'=> $email,
                                                       'dob'=>$dd,
													   'paddress'=>$paddress, 
													   'class'=> $class,
													   'section'=>$section,
													   'roll'=>$roll
                                                         ];
                           
                                                             $status = insertUser($user);
                           
                                                              if($status){
                                                                 header('location: ../View/login.php');
                                                             }else{
                                                               echo "error";
                                                             }
       
                                              
                                              
                                               
                                              
       
                                                    }
                                               }
   
                                             }else{
                                               echo "Username not valid (may contain alphanumeric characters, period, dash or underscore only and length should be greater than 2) ";
                                                }
                                            
                                            
                                        }else{
                                            echo "Password not valid (must contain a special character)";
                                        }
                                       
                                    }

                                }else{
                                    echo "Password not valid (length should be greater than 7) ";
                                }


                                }else{
                                    echo "Mobile number not valid (must contain 11 digits and integer number only) ";
                                }


                                }else{
                                    echo "ID not valid (must contain 03 digits and integer number only) ";
                                }

                                
                            }
                        }




                       




                        if(FormValidation())
                        {
                            true;
                        }

			}else{
				echo "password & confirm password mismatch..";
			}
		}

















       







	}
?>