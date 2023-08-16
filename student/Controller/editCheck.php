<?php
session_start();
//require_once('../model/DatabaseConnection.php');
if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address = $_POST['p_address']; 
  

    if (strlen($mobile) == 10) {
        for ($i = 0; $i < strlen($name); $i++) {
            if ((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' ') {
                if (strlen($name) > 2) {

                    $user = [	
                        'name'=>$name, 
                        'mobile'=>$mobile,
                        'id' => $id,
                        'gender'=>$gender, 
                        'email'=> $email,
                        'dob'=>$dob,
                        'p_address'=>$p_address, 
                          ];


                    $conn = mysqli_connect('localhost','root','','school_management_system');
                    $sql = "insert into edit_student (id, name, email, mobile, gender, dob, p_address) values ('{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['mobile']}', '{$user['gender']}', '{$user['dob']}', '{$user['p_address']}')";
                    $status = mysqli_query($conn, $sql);
                    if ($status) {
                        echo "info updated!";
                        header('location: ../view/viewprofile.php');
                    } else {
                        echo "Can't update the Information!";
                    }
                } else {
                    echo "Name length should be greater than 2";
                }
            } else {
                echo "Name contain only alphanumeric characters";
            }
        }
    } else {
        echo "Mobile must contain 11 digits and integer number only";
    }
}
