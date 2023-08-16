<?php
	
	 
 $conn = mysqli_connect('localhost','root','','school_management_system');
function insertUserleave($user){

$conn = getConnection();
$sql = "insert into leave_request  values ( '','{$user['id']}', '{$user['name']}', '{$user['leave_from']}', '{$user['leave_to']}','')";

if(mysqli_query($conn, $sql)){
    return true;
}else{
    return false;
}
}

?>