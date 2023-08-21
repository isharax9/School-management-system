<?php
$title = "View Sturdnt";
$js = "../script/StudentSearch.js";
include('header.php');
include_once('../model/studentModel.php');
$UsersList = allUserList();
?>
<div id="sidebar" class="">
	<ul>
		<li><a href="addStudent.php">Add Student</a></li>
		<li><a href="viewStudent.php">View Student</a></li>
		<li><a href="editrequestlist.php">Edit Request</a></li>
		<li><a href="dashboard.php">Dashbord</a></li>
		<li><a href="../Controller/logout.php">Logout</a></li>

	</ul>
</div>
</td>

<td align="center">
	<center>
		<h2 class="textlegend">Student list</h2>
		<input type="text" name="name" id="name" onkeyup="ajax()" />
		<input type="button" name="" value="Search">
	</center>
	<div id="myh1" class="">
		<br>
		<?php
		echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
										<td>Id</td>
										<td>Name</td>
										<td>Email</td>
										<td>Mobile</td>
										<td>Gender</td>
										<td>DOB</td>
										<td>Present Address</td>
										<td>Class</td>
										<td>Section</td>
										<td>Roll</td>
										<td>Action</td>
								</tr>";
		for ($i = 0; $i < count($UsersList); $i++) {
			echo "<tr align = 'center'>
										<td>{$UsersList[$i]['id']}</td>
										<td>{$UsersList[$i]['name']}</td>
										<td>{$UsersList[$i]['email']}</td>
										<td>{$UsersList[$i]['mobile']}</td>
										<td>{$UsersList[$i]['gender']}</td>
										<td>{$UsersList[$i]['dob']}</td>
										<td>{$UsersList[$i]['p_address']}</td>
										<td>{$UsersList[$i]['class']}</td>
										<td>{$UsersList[$i]['section']}</td>
										<td>{$UsersList[$i]['roll']}</td>
										<td> <a href='editStudent.php?id={$UsersList[$i]['id']}'> Edit </a> | <a href='deleteStudent.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
								</tr>";
		}
		echo "</table>";
		?>
	</div>

</td>
</tr>
</table>
</td>
</tr>




<?php include('footer.php'); ?>