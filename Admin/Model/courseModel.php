<?php
include_once('db.php');
function insert($userinfo){
    $conn = getConnection();
    $sql = "insert into course values('','{$userinfo['name']}', '{$userinfo['class']}','{$userinfo['description']}')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
        return false;
    }
}

function allUserList(){
    $conn = getConnection();
    $sql = "select * from course";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function updateMyInfo($id, $userinfo){
    $conn = getConnection();
    $sql = "update course set course_name='{$userinfo['course_name']}', class='{$userinfo['class']}' ,description='{$userinfo['description']}'   where id='{$id}'";

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
    $sql = "delete from course where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/viewCourse.php?your info is deleted');
    }
    else
    {
        header('location: ../view/viewCourse.php?Not deleted your info');
    }

}
function getUserbyid($id){
    $conn = getConnection();
    $sql = "select * from course where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}



?>
