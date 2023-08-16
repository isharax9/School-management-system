<?php
	
	require_once('db.php');

	function validateUser($Id, $password){

		$conn = getConnection();

		$sql = "select * from student where id='{$Id}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into student (id, name, email, mobile, gender, dob, class, section, roll, p_address, password) values ( '{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['mobile']}', '{$user['gender']}', '{$user['dob']}', '{$user['class']}', '{$user['section']}', '{$user['roll']}', '{$user['paddress']}', '{$user['password']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function insertNotes($user){

		$conn = getConnection();
		$sql = "insert into notes (notes) values ('{$user['name']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function updateRequestProfile($user){

		$conn = getConnection();
		$sql = "insert into edit_student (id, name, email, mobile, gender, dob, p_address) values ('{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['mobile']}', '{$user['gender']}', '{$user['dob']}', '{$user['p_address']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	



	function getleavebyid($Id){

		$conn = getConnection();

		$sql = "select * from leave_request where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}


	function getUserById($Id){

		$conn = getConnection();

		$sql = "select * from student where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}



	function getEmailByAllUsers(){

		$conn = getConnection();

		$sql = "select * from student";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<table border=1>
			
			      <tr>
			
			      <td>{$row['email']}</td>
			     
			
			     </tr>
				 </table>";
		   
		}
	   return $row;
	}

	

	
	function getAllUsers(){

		$conn = getConnection();

		$sql = "select * from student";
		$result = mysqli_query($conn, $sql);
         
        echo "<table border=1> 
			<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Mobile No.</td>
			<td>ID</td>
			<td>Gender</td>
			<td>Date of Birth</td>
			<td>Present Address</td>
			<td>Class</td>
			<td>Section</td>
			<td>Roll</td>
			</tr>";


		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>
			
			      <td><a href= ../View/StudentProfile.php>{$row['name']}</a></td>
				  <td>{$row['email']}</td>
				  <td>{$row['mobile']}</td>
				  <td>{$row['id']}</td>
				  <td>{$row['gender']}</td>
				  <td>{$row['dob']}</td>
				  <td>{$row['p_address']}</td>
				  <td>{$row['class']}</td>
				  <td>{$row['section']}</td>
				  <td>{$row['roll']}</td>
			     
			
			     </tr>";
		   
		}
		echo "</table>";
	}



	function updatePassword($Id, $newpass){
		$conn = getConnection();
		$sql = "update registration set Password='{$newpass}' where ID='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function changePassword($id, $newPass){
		$conn = getConnection();
		$sql = "update student set password='{$newPass}' where id='{$id}'";
		if(mysqli_query($conn, $sql)){
		  return true;
		}else{
		  return false;
		}
	  }


	  function getAllNotice(){
		$conn = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}







	function getAllteacher(){

		$conn = getConnection();

		$sql = "select * from teacher";
		$result = mysqli_query($conn, $sql);
		$user=[];
         
      
			


		while($row = mysqli_fetch_assoc($result))
		{
			
			array_push($user, $row);
			   
			    
		   
		}
		return $user;
		
	}





	function getAllcourse(){

		$conn = getConnection();

		$sql = "select * from course";
		$result = mysqli_query($conn, $sql);
		$user=[];
         
      
			


		while($row = mysqli_fetch_assoc($result))
		{
			
			array_push($user, $row);
			   
			    
		   
		}
		return $user;
		
	}





	function getAllschoolnotice(){

		$conn = getConnection();

		$sql = "select * from school_notice";
		$result = mysqli_query($conn, $sql);
		$user=[];
         
      
			


		while($row = mysqli_fetch_assoc($result))
		{
			
			array_push($user, $row);
			   
			    
		   
		}
		return $user;
		
	}




	function getAllbook(){

		$conn = getConnection();

		$sql = "select * from book_info";
		$result = mysqli_query($conn, $sql);
		$user=[];
         
      
			


		while($row = mysqli_fetch_assoc($result))
		{
			
			array_push($user, $row);
			   
			    
		   
		}
		return $user;
		
	}




	function updateMyInfo($id, $userinfo){
		$conn = getConnection();
		$sql = " update student set name='{$userinfo['name']}' , email='{$userinfo['email']}', mobile='{$userinfo['mobile']}', gender='{$userinfo['gender']}', dob='{$userinfo['dob']}',p_address='{$userinfo['p_address']}' where id='{$id}'";
		
		 if(mysqli_query($conn, $sql))
		{
		return true;
		}
		else
		{
		return false;
		}
		
		}



	


		function getAllroutine(){

			$conn = getConnection();
	
			$sql = "select * from routine";
			$result = mysqli_query($conn, $sql);
			$user=[];
			 
		  
				
	
	
			while($row = mysqli_fetch_assoc($result))
			{
				
				array_push($user, $row);
				   
					
			   
			}
			return $user;
			
		}


		

		function getbookbyisbn($isbn){

			$conn = getConnection();
	
			$sql = "select * from book_info where isbn='{$isbn}'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
	
			return $row;
		}




		function getissuedbook($id){

			$conn = getConnection();
	
			$sql = "select * from issuedbookdetails where id='{$id}'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
	
			return $row;
		}


		

 

?>