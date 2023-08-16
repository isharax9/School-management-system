<?php
include_once('db.php');
function insert($userinfo){
    $conn = getConnection();
    $sql = "insert into student values('{$userinfo['id']}', '{$userinfo['name']}','{$userinfo['email']}', '{$userinfo['mobile']}', '{$userinfo['gender']}', '{$userinfo['dob']}', '{$userinfo['class']}', '{$userinfo['section']}',
    '{$userinfo['roll']}', '{$userinfo['p_address']}', '{$userinfo['password']}', '')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
        return false;
    }


}
function validateUser($id, $password){
    $conn = getConnection();
    $sql = "select * from student where id = '$id' and password = '$password'";
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
    $sql = "select * from student";
    $result = mysqli_query($conn, $sql);
    $users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function alleditUserList(){
    $conn = getConnection();
    $sql = "select * from edit_student";
    $result = mysqli_query($conn, $sql);
    $users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}
function updateMyInfo($id, $userinfo){
    $conn = getConnection();
    $sql = " update student set name='{$userinfo['name']}' , email='{$userinfo['email']}', mobile='{$userinfo['mobile']}', gender='{$userinfo['gender']}', dob='{$userinfo['dob']}',p_address='{$userinfo['p_address']}',class='{$userinfo['class']}',section='{$userinfo['section']}',roll='{$userinfo['roll']}'   where id='{$id}'";

    if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}

}
function updateEditInfo($id, $userinfo){
    $conn = getConnection();
    $sql = " update student set name='{$userinfo['name']}' , email='{$userinfo['email']}', mobile='{$userinfo['mobile']}', gender='{$userinfo['gender']}', dob='{$userinfo['dob']}',p_address='{$userinfo['p_address']}'   where id='{$id}'";

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
    $sql = "delete from student where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/viewStudent.php?your info is deleted');
    }
    else
    {
        header('location: ../view/viewStudent.php?Not deleted your info');
    }

}

/**
 * Summary of deleteEditUserbyid
 * @param mixed $id
 * @return void
 */
function deleteEditUserbyid($id){
    $conn = getConnection();
    $sql = "delete from edit_student where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/viewStudent.php?your info is deleted');
    }
    else
    {
        header('location: ../view/viewStudent.php?Not deleted your info');
    }

}

function getUserbyid($id){
    $conn = getConnection();
    $sql = "select * from student where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}


function getRequestUserbyid($id){
    $conn = getConnection();
    $sql = "select * from edit_student where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}

?>
