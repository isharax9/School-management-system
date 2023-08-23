<?php
include_once('db.php');
function insert($userinfo){
    $conn = getConnection();
    $sql = "insert into officer values('{$userinfo['id']}', '{$userinfo['name']}','{$userinfo['email']}', '{$userinfo['password']}')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
        return false;
    }


}
function validateUser($id, $password){
    $conn = getConnection();
    $sql = "select * from officer where id = '$id' and password = '$password'";
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
    $sql = "select * from officer";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function updateMyInfo($id, $userinfo){
    $conn = getConnection();
    $sql = "update officer set id='{$userinfo['id']}', name='{$userinfo['name']}' ,email='{$userinfo['email']}'   where id='{$id}'";

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
    $sql = "delete from officer where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/userlist.php?your info is deleted');
    }
    else
    {
        header('location: ../view/userlist.php?Not deleted your info');
    }

}
/**
 * Summary of getUserbyid
 * @param mixed $id
 * @return array|bool|null
 */
function getUserbyid($id){
    $conn = getConnection();
    $sql = "select * from officer where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}
/**
 * Summary of changePassword
 * @param mixed $id
 * @param mixed $newPass
 * @return bool
 */
function changePassword($id, $newPass){
  $conn = getConnection();
  $sql = "update officer set password='{$newPass}' where id='{$id}'";
  if(mysqli_query($conn, $sql)){
    return true;
  }else{
    return false;
  }
}
/**
 * Summary of forgetpass
 * @return void
 */
function forgetpass(){

}


?>
