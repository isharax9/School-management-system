<?php
    //require_once('../Model/DatabaseConnection.php');


    if(isset($_POST['submit']))
    {
        
        $file = $_FILES['picture'];

        if($file['name'] == "" || $file['size'] == 0){
            echo "Null Submission";
    
        }else{
            $size = $file['size'];
            $KB =   $size/1024;
            $name = $file['name'];
            $type = $file['type'];
            $filetemp_name = $file['tmp_name'];
            if($KB >= 700){
                echo "file size should be minimum";
                echo "</br>";
            }else{
                if($type == "image/png" || $type == "image/jpeg"){
                    $path = '../Resources/'.$name;
                    $user = ['name' => $name]; 

                    $conn = mysqli_connect('localhost','root','','school_management_system');
                    $sql = "insert into notes (notes) values ('{$user['name']}')";
                    $status = mysqli_query($conn, $sql);
                    //$status = insertNotes($user);
                    if($status)
                    {
                        if(move_uploaded_file($filetemp_name, $path)){
                            header('location: ../View/Upload.php');
                            return true;
                        }else{
                           echo "Error Occured!";
                            }

                    }

                    
                    }else{
                    echo "file type should be Only png or jpeg format";
                    echo "</br>";
    
                }
            }
            
        }

    }
?>