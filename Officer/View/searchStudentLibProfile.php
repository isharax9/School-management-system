<?php
	
    $roll = $_REQUEST['roll'];

	$con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from studentslibraryaccount where roll '%{$roll}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
    <tr>
    <th>Serial No.</th>
    <th>Roll</th>
    <th>Name</th>
    <th>Mail</th>
    <th>Gender</th>
    <th>Action</th>
</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
              <td>{$row['serialno']}</td>
              <td>{$row['roll']}</td>
			  <td>{$row['name']}</td>
              <td>{$row['mail']}</td>
              <td>{$row['gender']}</td>
              <td><a href='editstudentlibprofile.php?roll={$row['roll']}'>UPDATE</a>
              | <a href='deletestudentlibprofile.php?roll={$row['roll']}'>DELETE</a> </td>
              </tr>";
	}

	$response .= "</table>";

	echo $response;

?>