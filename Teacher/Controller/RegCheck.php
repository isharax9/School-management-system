<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$name = $_POST['uname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $ID = $_POST['ID'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $gender = $_POST['gender'];
        $dd = $_POST['dob'];


		if($name == "" || $email == "" || $mobile == "" || $ID == "" || $password == "" || $confirm == "" || $gender == "" || $dd == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

                        function FormValidation()
                        {
                            if(isset($_POST['uname']) || isset($_POST['email']) || isset($_POST['mobile']) || isset($_POST['ID']) || isset($_POST['Password']) || isset($_POST['gender']) || isset($_POST['dob']))
                            {
                                $name = $_POST['uname'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
                                $Validation = false;


                                if(strlen($name) > 3)
                                {

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
       
                                                   for($i=0;$i<strlen($name);$i++)
                                                   {
                                               
                                                       if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90))
                                                       {
                                                  
                                                           $Validation = true;


                                                            $user = [	
                                                                'uname'=>$name, 
                                                                'mobile'=>$mobile,
                                                                'ID' => $ID,
                                                                'gender'=>$gender,
                                                                'password'=>$password, 
                                                                'email'=> $email,
                                                                'dob'=>$dd
                                                                  ];
                                    
                                                                      $status = insertUser($user);
                                    
                                                                       if($status){
                                                                          header('location: ../View/LoginPage.php');
                                                                      }else{
                                                                        echo "error";
                                                                      }
                                                            
                                                        
                                                   
                                                  
           
                                                        }else{
                                                            echo "Name not valid (Should be Alphabet) ";
                                                        }
                                                   }
       
                                                 
                                                
                                                
                                            }else{
                                                echo "Password not valid (must contain a special character) ";
                                            }
                                           
                                        }
    
                                    }else{
                                        echo "Password not valid (length should be greater than 7) ";
                                    }
    
    
                                    }else{
                                        echo "Mobile number not valid (must contain 10 digits and integer number only) ";
                                    }
    
    
                                    }else{
                                        echo "ID not valid (must contain 04 digits and integer number only) ";
                                    }

                                }else{
                                    echo "Name not valid (length should be greater than 3) ";
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