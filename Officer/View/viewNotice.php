<?php
$title = "view notice";
include('header.php');
include_once('../model/noticeModel.php');
$UsersList = allUserList();
?>
<div id="sidebar" class="">
	<ul>
		<li><a href="postNotice.php">Notice</a></li>
		<li><a href="viewNotice.php">View Notice</a></li>
	</ul>
</div>
</td>
<td align="center">
	<center>
		<h3 class="textlegend">All Notice</h3>
	</center>
	<?php
	echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
                    <td>ID</td>
								    <td>Notice</td>
								    <td>Time</td>
										<td>Action</td>

								</tr>";
	for ($i = 0; $i < count($UsersList); $i++) {
		echo "<tr align = 'center'>
								    <td>{$UsersList[$i]['id']}</td>
								    <td>{$UsersList[$i]['notice']}</td>
								    <td>{$UsersList[$i]['time']}</td>
								    <td> <a href='editNotice.php?id={$UsersList[$i]['id']}'> Update </a> | <a href='deleteNotice.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
								</tr>";
	}
	echo "</table>";
	?>
</td>
</tr>
</table>
</td>
</tr>
<?php include('footer.php'); ?>