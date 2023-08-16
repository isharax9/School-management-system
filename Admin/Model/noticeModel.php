<?php
include_once('db.php');
function insert($userinfo){
    $conn = getConnection();
    $sql = "insert into school_notice (notice) values('{$userinfo['notice']}')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
        return false;
    }
}

function allUserList(){
    $conn = getConnection();
    $sql = "select * from school_notice";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function updateMyInfo($id, $userinfo){
    $conn = getConnection();
    $sql = "update school_notice set notice='{$userinfo['notice']}'   where id='{$id}'";

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
    $sql = "delete from school_notice where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/viewNotice.php?your info is deleted');
    }
    else
    {
        header('location: ../view/viewNotice.php?Not deleted your info');
    }

}
function getUserbyid($id){
    $conn = getConnection();
    $sql = "select * from school_notice where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}



?>
