<?php
	
    $name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from student where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Class</th>
    <th>Section</th>
    <th>Roll</th>Roll
    <th>Present Address</th>
</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
			  <td>{$row['mobile']}</td>
              <td>{$row['gender']}</td>
              <td>{$row['dob']}</td>
              <td>{$row['class']}</td>
              <td>{$row['section']}</td>
              <td>{$row['roll']}</td>
              <td>{$row['p_address']}</td>
              </tr>";
	}

	$response .= "</table>";

	echo $response;

?>