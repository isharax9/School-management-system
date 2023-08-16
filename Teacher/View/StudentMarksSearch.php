<?php
    require_once('../Model/DatabaseConnection.php');
	
    $name = $_REQUEST['name'];

    $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from student where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);
    $User = getUserById($_COOKIE['ID']);

	$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <td>ID</td>
            <td>Name</td>
            <td>Class</td>
            <td>Subject</td>
            <td>Section</td>
            <td>Roll</td>
            <td>Marks</td>
            <td>Marks Update</td>
            <td>Marks Delete</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
              <td>{$row['id']}</td>
			  <td>{$row['name']}</td>
              <td>{$row['class']}</td>
              <td>{$User['subject']}</td>
              <td>{$row['section']}</td>
              <td>{$row['roll']}</td>
              <td>{$row['marks']}</td>
              <td> <a href='Marks.php?id={$row['id']}'> Update </a> </td>
              <td> <a href='DeleteMarks.php?id={$row['id']}'> Delete </a> </td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>
