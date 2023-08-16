<?php
require_once('../model/usersmodel.php');
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $Officerid = $_POST['Officerid'];
    $gender = $_POST['gender'];
    $mobileno = $_POST['mobileno'];
    $dob = $_POST['dob'];
    // $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    function nameValidation($name){
        if($name == ""){
            echo "Name Field Can't be Empty";
        }else{
            if(strlen($name) >= 3){
                $number = is_numeric($name);
                if($number == 1){
                    echo "Name should be Alphabet";
        
                }else{
                    $firstletter = substr($name,0,1);
                    if($firstletter){
                        if(ord($firstletter ) >= 65 && ord($firstletter ) <= 90){
                            return $name;
                        }else{
                            echo "Name First Letter Should be Capital Word";
                            echo "</br>";
                        }
        
                    }else{
                        echo "Name First Letter Should be Capital Word";
                        echo "</br>";
                    }
        
                }
        
            }else{
                echo "Name should be greater or  equal than four char";
                echo "</br>";
            }
        }
    }

    function mailValidation($mail){
        if($mail == ""){
            echo "Mail field is required";
            echo "</br>";
    
        }else{
            $firstletter = substr($mail,0,1);
            if($firstletter){
                if(ord($firstletter) >= 97 && ord($firstletter) <= 122 || is_numeric(!$firstletter)){
                    return $mail;
    
                }else{
                    echo "Mail first letter should be small letter and not be number";
                    echo "</br>";
                }
            }
        }
    }

    function OfficeridValidation($Officerid){
        if($Officerid == ""){
            echo "Officer Id Field is Must Require";
        }else{
            if(strlen($Officerid) == 4){
                if(is_numeric($Officerid)){
                    return $Officerid;
                }else{
                    echo "Officer Id Should be Integer";
                }

            }else{
                echo "Officer Id Should be 4 digit";
            }
        }
    }

    function genderValidation($gender){
        if($gender == "male" || $gender == "female"){
            return $gender;
        }else{
            echo "Please choose gender";
        }
    }

    function mobilenoValidation($mobileno){
        if($mobileno == ""){
            echo "Mobile Number is Require";
        }else{
            if(strlen($mobileno) == 10){
                if(is_numeric($mobileno)){
                    return $mobileno;
                }else{
                    echo "Mobile Number Should be Number";
                }

            }else{
                echo "Mobile Number Should be 11 digit";
            }
        }
    }

    function passwordValidation($password){
        if($password == ""){
                echo "password can't be empty";
            }else{
                if(strlen($password) >= 8){
                    if(is_numeric($password)){
                        return $password;
                    }else{
                        echo "password should be Number!";
                    }
                   
                }else{
                    echo "Password not less than 8 char!";
                }
            }
        
    }

    function passwordMatching($password, $cpassword){
        if($password == $cpassword){
            return true;
        }else{
            return false;
        }
    }

    function dobValidation($dob){
        if($dob == ""){
            echo "Date Of Birth Must be Require";
        }else{
        $dob2 = strtotime($dob);
        if (($dob2 > (time() - (60 * 60 * 24 * 365 * 20))) || ($dob2 < (time() - (60 * 60 * 24 * 365 * 30)))) {
        echo "Age should be between 20 to 30";
        }else{
        return $dob;
        }

        }
    }

    // function addressValidation($address){
    //     if($address != ""){
    //         if(is_numeric($address) != 1){
    //             return $address;
    
    //         }else{
    //             echo "Address should be Alphabet only";
    //             echo "</br>";
    //         }
           
    //     }else{
    //         echo "Address can't be empty";
    //         echo "</br>";
    //     }
    
         
    // }

    if(mailValidation($mail) && nameValidation($name) && OfficeridValidation($Officerid) && genderValidation($gender) && mobilenoValidation($mobileno) && dobValidation($dob) && passwordValidation($password)){
        if(passwordMatching($password, $cpassword) == true){
            $conn = getConnection();
            $sql= "select * from Officer where id='$Officerid'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if($row >= 1){
                echo "This ID Exists,Please choose another ID";

            }else{
                $userinfo = [
                    'name' => $name,
                    'email' => $mail,
                    'id' => $Officerid,
                    'gender' => $gender,
                    'mobile' => $mobileno,
                    'dob' => $dob,
                    // 'p_address' => $address,
                    'password' => $password
                ];
                $status = insertUser($userinfo);
                if($status){
                    header('location: ../View/OfficerLogin.php');
                }else{
                    echo "failed to insert!";
                       }
            }
            
        }else{
                echo "password and confirm password doesn't match";
            }
        
        


    }else{
        return false;
    }


}else{
    echo "invalid Request!";
}


?>
