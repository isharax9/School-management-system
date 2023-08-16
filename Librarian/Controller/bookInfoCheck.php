<?php
require_once('../model/usersmodel.php');
if(isset($_POST['addnewbook'])){

    $isbn = $_POST['isbn'];
    $booktitle = $_POST['booktitle'];
    $categories = $_POST['categories'];
    $author = $_POST['author'];
    $bookcopy = $_POST['bookcopy'];
    $edition = $_POST['edition'];
    $bookfile = $_FILES['bookfile'];
    

    function isbnNoValidation($isbn){
        if($isbn == ""){
            echo "ISBN Field is Must Require";
        }else{
            if(strlen($isbn) == 10){
                if(is_numeric($isbn)){
                    return $isbn;
                }else{
                    echo "ISBN Number Should be Integer";
                }

            }else{
                echo "ISBN Number Should be 10 digit";
            }
        }
    }

    function bookTitleValidation($booktitle){
        if($booktitle == ""){
            echo "Book Title Field is Must Require";
        }else{
             if(strlen($booktitle) >= 12){
                 return $booktitle;
             }else{
                 echo "Book title should be more than 12 char";
             }
        }
    }

    function authorValidation($author){
        if($author == ""){
            echo "Author Field Must Require";
        }else{
            $firstletter = substr($author,0,1);
            if($firstletter){
                if(ord($firstletter) >= 65 && ord($firstletter) <= 90 || is_numeric(!$firstletter)){
                    if(strlen($author) > 3){
                        return $author;
                    }else{
                        echo "Author Name Should be word, not char";
                    }
    
                }else{
                    echo "Author Name first letter should be Capital letter and not be number";
                    echo "</br>";
                }
            }
        }

    }

    function bookCopyFile($bookcopy){
        if($bookcopy == ""){
            echo "At least 1 bookcopy is Require";
        }else{
            if(strlen($bookcopy) >= 1){
                if(is_numeric($bookcopy)){
                    return $bookcopy;
                }else{
                    echo "Book Item Should be Integer";
                }

            }else{
                echo "Book Item At least 1 bookcopy is Require";
            }
        }
    }

    function editionValidation($edition){
        if($edition ==""){
            echo "Edition field is Rquired";
        }else{
            if($edition == "First" || $edition == "first" || $edition == "1st" || $edition == '1'){
                echo "First Edition Book isn't allowed";
                echo "</br>";
            }else{
                return $edition;
            }
        }
    }

    function bookUploadFileValidation($bookfile){
        if($bookfile['name'] == "" || $bookfile['size'] == 0){
            echo "Upload Book is Require*";

        }else{
            $filesize = $bookfile['size'];
            $filesizeinKB = $filesize/1024;
            $filename = $bookfile['name'];
            $filetype = $bookfile['type'];
            $filetempname = $bookfile['tmp_name'];
            if($filesizeinKB >= 100){
                echo "file size should be minimum";
                echo "</br>";
            }else{
                if($filetype == "image/png" || $filetype == "image/jpeg"){
                    $path = '../Resources/book/'.$filename;
                    if(move_uploaded_file($filetempname, $path)){
                        //echo "successfully updoaded";
                        header('location: ../View/allBooksInfo.php');
                        return true;
                    }else{
                       echo "Error Occured!";
                        }
                    }else{
                    echo "file type should be Only PNJ and JPGE";
                    echo "</br>";

                }
            }
            
        }

    }
    

    if(isbnNoValidation($isbn) && bookTitleValidation($booktitle) && authorValidation($author) && bookCopyFile($bookcopy) && editionValidation($edition)){
        if(bookUploadFileValidation($bookfile) == true){
            $uploadbookcopy = $bookfile['name'];
            $bookinfo = [
                'isbn' => $isbn,
                'title' => $booktitle,
                'author' => $author,
                'categories' => $categories,
                'bookcopy' => $bookcopy,
                'edition' => $edition,
                'uploadbookcopy' => $uploadbookcopy
    
            ];
            $status = insertBook($bookinfo);
            print_r($status);
            if($status){
                echo "Successfully Book Inserted";
                }else{
                    echo "failed to book insert!";
                }

        }else{
            echo "book file invalid!";
            echo "</br>";
        }
        
        

    }else{
        return false;
    }

     
}
    
else{
    echo "enter all the info/invalid request";
}

?>