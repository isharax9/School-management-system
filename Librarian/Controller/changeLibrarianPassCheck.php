<?php

    require_once('../Model/usersmodel.php');
    session_start();
	if(isset($_POST['changepassword']))
	{
        $password = $_POST['password'];
        $newpassword =$_POST['newpassword'];
        $repassword = $_POST['repassword'];

        if($password == "" || $newpassword == "" || $repassword ==""){
            echo "All field is Require*";
        }else{
            function resetPasswordValidation(){
                $conn = getConnection();
                $sql = "select * from librarian where id='{$_SESSION['librarianid']}'";
                $result = mysqli_query($conn,$sql);
                $currentpassword = mysqli_fetch_assoc($result);
                return $currentpassword['password'];
    
            }
            
            $user =  getUserById($_SESSION['librarianid']);
            $id = $user['id'];
            if(resetPasswordValidation() == $password){
                if(resetPasswordValidation() != $newpassword){
                    if($newpassword == $repassword){
                        if(strlen($newpassword) >= 8){
                                $check = updateLibrarianPassword($id, $newpassword);
                                if($check){
                                    echo "Password changed!";
                                    header('location: ../View/viewLibrarianProfile.php');
                                }else{
                                    echo "Error Occured!";
                                }
                           
                        }else{
                            echo "Password not less than 8 char!";
                        }

                    }else{
                        echo "newpassword and repassword doesn't match";
                    }

                }else{
                    echo "Please, enter new password. Current Password can't be New Password";
                }
                
            }else{
                echo "Current Password is Wrong";
            }
        }
   
	}
    else {
      echo "Invalid Password";
    }


?>