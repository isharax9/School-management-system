<?php
require_once('../Model/usersmodel.php');
if(isset($_POST['uploadnotice'])){
    $noticetitle = $_POST['noticetitle'];
    $noticedetails = $_POST['noticedetails'];
    $noticetime = time() - 86400;

    function noticeTitleValidation($noticetitle){
        if($noticetitle == ""){
            echo "Notice Field is Require*";
            echo "</br>";
        }else{
            if(strlen($noticetitle) >= 20){
                if(strlen($noticetitle) > 40){
                    echo "Notice title Should be Short";
                    echo "</br>";
                }else{
                    if(is_numeric($noticetitle)){
                        echo "notice title should be text";
                        echo "</br>";
                    }else{
                        return $noticetitle;
                    }
                }

            }else{
                echo "Notice title isn't proper meaningfull";
                echo "</br>";
            }
        }
    }

    function noticeDetailsValidation($noticedetails){
        if($noticedetails == ""){
            echo "Notice details is Require*";
            echo "</br>";
        }else{
            if(strlen($noticedetails) >= 20){
                if(strlen($noticedetails) < 40){
                    echo "Notice details Should be Longer";
                    echo "</br>";
                }else{
                    if(is_numeric($noticedetails)){
                        echo "notice details should be text";
                        echo "</br>";
                    }else{
                        return $noticedetails;
                    }
                }

            }else{
                echo "Notice details isn't proper meaningfull";
                echo "</br>";
            }
        }
    }

    if(noticeTitleValidation($noticetitle) && noticeDetailsValidation($noticedetails)){
        $noticeinfo = [
            'noticetitle' => $noticetitle,
            'noticedetails' => $noticedetails,
            'noticetime' => $noticetime
        ];
        //print_r($noticeinfo['noticetime']);
        
        $status1 = insertNotice($noticeinfo);
        if($status1){
            header('location: ../View/dashboard.php');
        }else{
            echo "failed to upload notice!";
            }

    }else{
        return false;
    }
    

}
else{
    echo "Invalid Request";
}


?>