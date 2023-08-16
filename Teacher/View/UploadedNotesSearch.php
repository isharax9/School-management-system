<?php

	$name = $_REQUEST['name'];

    $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from notes where notes like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <td>ID</td>
            <td>Notes</td>
            <td>Time</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
              <td>{$row['id']}</td>
			  <td>{$row['notes']}</td>
              <td>{$row['time']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>
