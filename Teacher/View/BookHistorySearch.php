<?php

	$name = $_REQUEST['name'];

    $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from book_info where title like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <td>ISBN</td>
            <td>Title</td>
            <td>Author</td>
            <td>Edition</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
              <td>{$row['isbn']}</td>
              <td>{$row['title']}</td>
			  <td>{$row['author']}</td>
              <td>{$row['edition']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>
