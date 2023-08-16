<?php
session_start();
require_once('../Model/usersmodel.php');
if(isset($_POST['submit'])){
    $id= $_POST['sturoll'];
    if($id == ""){
        echo "ID Number is Required*";
    }else{
        if(is_numeric($id)){
            $status = getStudentById($id);
            if($status){
                $_SESSION['id'] = $id;
                $exist = createStudentsLibraryAcc($id);
            }else{
                echo "Invalid ID";
            }
            
            
        }else{
            echo "ID Number Should be Number";
        }
    }
}


?>