<?php
require_once('db.php');

function insertUser($userinfo){
    $conn = getConnection();
    $sql = "insert into Officer values('','{$userinfo['id']}','{$userinfo['name']}','{$userinfo['email']}','{$userinfo['gender']}','{$userinfo['dob']}','{$userinfo['password']}','{$userinfo['mobile']}')";
    
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
 
}

function validateUser($Officerid,$password){
    $conn = getConnection();
    $sql = "select * from Officer where id='$Officerid' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;

    }else{
        return false;

    }
}

function viewOfficerProfile($Officerid){
    $conn = getConnection();
    $sql = "select * from Officer where id='$Officerid'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 }

 function updateOfficerPassword($id, $newpassword){
    $conn = getConnection();
    $sql = "update Officer set password='{$newpassword}' where id='{$id}'";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function insertBook($bookinfo){
    $conn = getConnection();
    $sql = "insert into book_info values('','{$bookinfo['isbn']}','{$bookinfo['title']}','{$bookinfo['author']}','{$bookinfo['edition']}','{$bookinfo['categories']}','{$bookinfo['uploadbookcopy']}','{$bookinfo['bookcopy']}')";
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
    
 }

 function viewBookInfo($serialno){
    $conn = getConnection();
    $sql = "select * from book_info where sl='$serialno'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 } 

 function requestBookInfo($id){
    $conn = getConnection();
    $sql = "select * from requestbook where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 } 

 function deleteBookInfo($serialno){
    $conn = getConnection();
    $sql = "delete from book_info where sl='$serialno'";
    $result = mysqli_query($conn,$sql);
    if($result)
		{
            header('location: ../View/allBooksInfo.php?your info is deleted');
		}
		else
		{
            header('location: ../View/allBooksInfo.php?Not deleted your info');
		}

 } 

 function updateBookInfo($serialno, $UpdateBookinfo){
    $conn = getConnection();
    $sql = "update book_info set title='{$UpdateBookinfo['booktitle']}' , author='{$UpdateBookinfo['author']}' , edition='{$UpdateBookinfo['edition']}' , categories='{$UpdateBookinfo['categories']}' , bookcopy='{$UpdateBookinfo['bookcopy']}' where sl='{$serialno}'";
    if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
    
} 


function createStudentsLibraryAcc($id){
    $conn = getConnection();
    $existsRoll = getStudentById($id);
    $have = viewStudentLibProfile($id);
    if($existsRoll != $have){
        $sql = "select * from student where id='{$id}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $newinfo = [
            'id' => $row['id'],
            'name' => $row['name'],
            'mail' => $row['email'],
            'gender' => $row['gender']
        ];
        $sql1 = "insert into studentslibraryaccount values('','{$newinfo['id']}','{$newinfo['name']}','{$newinfo['mail']}','{$newinfo['gender']}')";
        if(mysqli_query($conn,$sql1)){
          header('location:../View/viewAllStudentsLibProfile.php');
        }else{
            echo "failed to Create your Student Library Account!";
         }
        }else{
        echo "Exist Account";
       }

}


function deletestudentlibprofile($id){
    $conn = getConnection();
    $sql = "delete from studentslibraryaccount where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result)
		{
            header('location: ../View/viewAllStudentsLibProfile.php?your info is deleted');
		}
		else
		{
            header('location: ../View/allBooksInfo.php?Not deleted your info');
		}

 }

function ViewAllStudentsLibInfo()
	{
		$conn = getConnection();
		$sql = "select * from studentslibraryaccount";
		$result = mysqli_query($conn, $sql);
		$studentsLibInfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($studentsLibInfo, $row); 
		}

		return $studentsLibInfo;
	}

function viewStudentLibProfile($roll){
        $conn = getConnection();
        $sql = "select * from studentslibraryaccount where id='$roll'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
      
    }  
    
function UpdateStudentLibProfile($roll, $UpdateStudentLibProfile){
        $conn = getConnection();
        $sql = "update studentslibraryaccount set mail='{$UpdateStudentLibProfile['mail']}', name='{$UpdateStudentLibProfile['name']}' where id='{$roll}'";
        if(mysqli_query($conn, $sql))
            {
                return true;
            }
            else
            {
                return false;
            }
        
    }    
    

function insertNotice($noticeinfo){
    $conn = getConnection();
    $sql = "insert into notice values('','{$noticeinfo['noticetitle']}','{$noticeinfo['noticedetails']}','{$noticeinfo['noticetime']}')";
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
    
}

function viewAllNotice()
	{
		$conn = getConnection();
		$sql = "select * from Officernotice";
		$result = mysqli_query($conn, $sql);
		$notices =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($notices, $row); 
		}

		return $notices;
	}

function issuedBookDetails($issuedbook){
    $conn = getConnection();
    $sql = "insert into issuedbookdetails values('','{$issuedbook['isbnno']}','{$issuedbook['title']}','{$issuedbook['id']}','{$issuedbook['issuesdate']}','{$issuedbook['returndate']}','{$issuedbook['returnstatus']}','0')";
    if(mysqli_query($conn,$sql)){
        return true;
      }else{
          return false;
      }
    
}

function viewIssuedBookDetails()
	{
		$conn = getConnection();
		$sql = "select * from issuedbookdetails";
		$result = mysqli_query($conn, $sql);
		$issuedbookinfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($issuedbookinfo, $row); 
		}

		return $issuedbookinfo;
	}

function assignBookLateFine($studentroll, $addlatefine){
        $conn = getConnection();
        $sql = "update issuedbookdetails set returndate='{$addlatefine['returndate']}', returnstatus='{$addlatefine['returnstatus']}' , fine='{$addlatefine['addfine']}' where id='$studentroll'";
        if(mysqli_query($conn, $sql))
            {
                return true;
            }
            else
            {
                return false;
            }
        
    } 
    
function viewIssuedInfo($studentroll){
        $conn = getConnection();
        $sql = "select * from issuedbookdetails where id='$studentroll'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
      
     }

function ViewRequestBook()
     {
         $conn = getConnection();
         $sql = "select * from requestbook";
         $result = mysqli_query($conn, $sql);
         $RequestBook =[];
 
         while($row = mysqli_fetch_assoc($result))
         {
             array_push($RequestBook, $row); 
         }
 
         return $RequestBook;
     }     

function getAllBooksInfo()
	{
		$conn = getConnection();
		$sql = "select * from book_info";
		$result = mysqli_query($conn, $sql);
		$booksinfo =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($booksinfo, $row); 
		}

		return $booksinfo;
	}



function searchBookInfo($isbnno){
    $conn = getConnection();
    $sql = "select * from book_info where isbn='$isbnno'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  
 }

function getUserById($Id){

    $conn = getConnection();
    $sql = "select * from Officer where id='{$Id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

function getStudentById($id){
    $conn = getConnection();
    $sql = "select * from student where id='{$id}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}

function getISBN($isbnno){
    $conn = getConnection();
    $sql = "select * from book_info where isbn='{$isbnno}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}
 

function getAllstudentsInfo(){
    $conn = getConnection();
    $sql = "select * from student";
    $result = mysqli_query($conn, $sql);
    $studentsinfo =[];
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($studentsinfo, $row);
    }
    return $studentsinfo;
}

function getAllTeachersList(){
    $conn = getConnection();
    $sql = "select * from teacher";
    $result = mysqli_query($conn, $sql);
    $teacherslist =[];
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($teacherslist, $row);
    }
    return $teacherslist;
}
 




?>