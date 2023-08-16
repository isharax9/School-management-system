<?php
    require_once('../Model/DatabaseConnection.php');


    if(isset($_POST['submit']))
    {
        
        $file_info = $_FILES['photo'];

        if($file_info['name'] == "" || $file_info['size'] == 0){
            echo "Null Submission";
    
        }else{
            $size = $file_info['size'];
            $MB =   $size/1048576;
            $name = $file_info['name'];
            $type = $file_info['type'];
            $filetemp_name = $file_info['tmp_name'];
            if($MB >= 5){
                echo "file size should be minimum(less than 5 MB)";
                echo "</br>";
            }else{
                if($type == "image/png" || $type == "image/jpeg"){
                    $path = '../Resources/'.$name;
                    $user = ['name' => $name]; 
                    $status = insertNotes($user);
                    if($status)
                    {
                        if(move_uploaded_file($filetemp_name, $path)){
                            header('location: ../View/UploadNotes.php');
                            return true;
                        }else{
                           echo "Error Occured!";
                            }

                    }

                    
                    }else{
                    echo "file type should be only png or jpg or jpeg format";
                    echo "</br>";
    
                }
            }
            
        }

    }
?>