<?php
include_once('db.php');
function insert($userinfo){
    $conn = getConnection();
    $sql = "insert into teacher values('{$userinfo['id']}', '{$userinfo['name']}','{$userinfo['email']}', '{$userinfo['mobile']}', '{$userinfo['gender']}', '{$userinfo['dob']}','{$userinfo['subject']}', '{$userinfo['password']}')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
        return false;
    }


}
function validateUser($id, $password){
    $conn = getConnection();
    $sql = "select * from teacher where id = '$id' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(count($row) > 0){
        return true;
    }else{
        return false;
    }


}
function allUserList(){
    $conn = getConnection();
    $sql = "select * from teacher";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function updateMyInfo($id, $userinfo){
    $conn = getConnection();
    $sql = "update teacher set name='{$userinfo['name']}' , email='{$userinfo['email']}', mobile='{$userinfo['mobile']}', gender='{$userinfo['gender']}', dob='{$userinfo['dob']}', subject='{$userinfo['subject']}'  where id='{$id}'";

    if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}

}
function deleteUserbyid($id){
    $conn = getConnection();
    $sql = "delete from teacher where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/viewTeacher.php?your info is deleted');
    }
    else
    {
        header('location: ../view/viewTeacher.php?Not deleted your info');
    }

}
function getUserbyid($id){
    $conn = getConnection();
    $sql = "select * from teacher where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}
function forgetpass(){

}


?>
