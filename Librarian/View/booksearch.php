<?php
	
    $booktitle = $_REQUEST['title'];

	$con = mysqli_connect('localhost', 'root', '', 'school_management_system');
	$sql = "select * from book_info where title like '%{$booktitle}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
    <tr>
    <th>Serial No.</th>
    <th>ISBN</th>
    <th>Book Title</th>
    <th>Author</th>
    <th>Edition</th>
    <th>Categories</th>
    <th>Book Item No.</th>
    <th>Action</th>
</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
             <td>{$row['sl']}</td>
              <td>{$row['isbn']}</td>
			  <td>{$row['title']}</td>
              <td>{$row['author']}</td>
              <td>{$row['edition']}</td>
              <td>{$row['categories']}</td>
              <td>{$row['bookcopy']}</td>
              <td><a href='viewBookInfo.php?serialno={$row['sl']}'> View</a> 
              | <a href='editBookInfo.php?serialno={$row['sl']}'>UPDATE</a> 
              | <a href='deleteBookInfo.php?serialno={$row['sl']}'>DELETE</a> </td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>