<?php
    session_start();

    //require_once('../Model/StudentModel.php');

	if(isset($_POST['submit'])){
       
        $id = $_POST['id'];
		$isbn = $_POST['isbn'];
        $title = $_POST['title']; 
        $author = $_POST['author'];
        $edition = $_POST['edition'];
		


		if($id == "" || $isbn == "" || $title == "" || $author == ""|| $edition == ""){
			echo "null submission...";
		}
       
                         $user = [	
                                   'id'=>$id,
                                  'isbn'=>$isbn, 
                                   'title' => $title,    
                                   'author'=>$author,
                                   'edition'=>$edition
                                                     
                                 ];
                                          $conn = mysqli_connect('localhost','root','','school_management_system');
                                          $sql = "insert into requestbook (id, isbn, title, author, edition)  values ('{$user['id']}', '{$user['isbn']}', '{$user['title']}', '{$user['author']}', '{$user['edition']}')";
                                          $status = mysqli_query($conn, $sql);
                           
                                            if($status)
                                            {
                                                header('location: ../View/requestforbook.php');

                                            }else
                                            {
                                               echo "error";
                                            
                                            }

                                              
                                      
   }
?>