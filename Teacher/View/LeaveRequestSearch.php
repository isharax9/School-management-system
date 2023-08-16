<?php

	$name = $_REQUEST['name'];

    $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from leave_request where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <td>Serial</td>
            <td>ID</td>
            <td>Name</td>
            <td>Leave From</td>
            <td>Leave To</td>
            <td>Status</td>
            <td>Action</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
              <td>{$row['sl']}</td>
              <td>{$row['id']}</td>
			  <td>{$row['name']}</td>
              <td>{$row['leave_from']}</td>
              <td>{$row['leave_to']}</td>
              <td>{$row['action']}</td>
              <td> <a href='LeaveAction.php?id={$row['sl']}'> Action </a> </td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>
