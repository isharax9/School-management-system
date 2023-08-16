<?php
include_once('db.php');

function allUserList(){
    $conn = getConnection();
    $sql = "select * from book_info";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}

 ?>
