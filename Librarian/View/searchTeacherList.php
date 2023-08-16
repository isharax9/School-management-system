<?php
	
    $id = $_REQUEST['id'];

	$con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from teacher where id like '%{$id}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>DOB</th>
</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
             <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
			  <td>{$row['mobile']}</td>
              <td>{$row['gender']}</td>
              <td>{$row['dob']}</td>
              </tr>";
	}

	$response .= "</table>";

	echo $response;

?>