<?php
include_once('../Model/usersmodel.php');
session_start();


$studentroll = $_POST['studentroll'];
$isbnno = $_POST['isbnno'];
$title = $_POST['title'];
$issuesdate = date("Y/m/d");
$rdate = strtotime("tomorrow");
$returndate = date("Y/m/d",$rdate);
$returnstatus = 0;

$selectstudentsroll = getStudentById($studentroll);
$selectISBNNo = getISBN($isbnno);

if($studentroll == ""){
    echo "Enter Student Roll";
}else{
    if($studentroll != $selectstudentsroll){
        echo "This ROll isn't exists";
    }else{
        if($isbnno == ""){
            echo "Enter ISBN No";
        }else{
            if($isbnno != $selectISBNNo){
                echo "ISBN no isn't valid";
            }else{
                if($studentroll == $selectstudentsroll && $isbnno == $selectISBNNo){
                    $issuedbook = [
                        'isbnno' => $isbnno,
                        // 'studentroll' => $studentroll,
                        'title' => $title,
                        'id' => $studentroll,
                        "issuesdate" => $issuesdate,
                        'returndate' => $returndate,
                        'returnstatus' => $returnstatus
                    ];
                    $issuedBookInfo = issuedBookDetails($issuedbook);
                    if($issuedBookInfo){
                        $_SESSION['issue'] = true;
                        header('location: ../View/issuedBookHistory.php');
                        echo "successfully Issued";
                         }else{
                           echo "failed to Issue!";
                         }
                }else{
                    echo "failed to Issue!";
                  }
            }
        }
    }
}


?>