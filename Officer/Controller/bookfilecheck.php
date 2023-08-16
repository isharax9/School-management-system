<?php
if(isset($_POST['submit'])){
    $fileinfo = $_FILES['myfile'];
    $name = $_POST['first'];
    echo $name;
    print_r($fileinfo);

    // $fileinfo = $_FILES['myfile'];
    // if($fileinfo['name'] == "" || $fileinfo['size'] == 0){
    //     echo "Upload Book is Require*";
    // }else{
    //     $filesize = $fileinfo['size'];
    //     $filesizeinKB = $filesize/1024;
    //     $filename = $fileinfo['name'];
    //     $filetype = $fileinfo['type'];
    //     $filetempname = $fileinfo['tmp_name'];
    //     if($filesizeinKB >= 100){
    //         echo "file size should be minimum";
    //     }else{
    //         if($filetype == "image/png" || $filetype == "image/jpeg"){
    //             $path = '../Resources/book/'.$filename;
    //             if(move_uploaded_file($filetempname, $path)){
    //                 echo "successfully updoaded";
    //             }else{
    //                 echo "Error Occured!";
    //             }
        
    //         }else{
    //             echo "file type should be Only PNJ and JPGE";
    //         }
    //     }
    // }

}else{
    echo "invalid Request";
}


// if(isset($_POST['submit'])){
//     if(isset($_FILES['myfile'])){
//         echo "have";
//     }else{
//         echo "have no";
//     }
// }else{
//     echo "invalid rqst";
// }


?>