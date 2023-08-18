<?php
$title = "Edit Profile";
$js = "../Script/EditProfileVal.js";
include('header.php');
include_once('../model/adminModel.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>
<div id="sidebar" class="">
	<ul>
		<li><a href="Dashboard.php">Dashbord</a></li>
		<li><a href="viewProfile.php">View Profile</a></li>
		<li><a href="EditProfile.php">Edit Profile</a></li>
		<li><a href="ChangePassword.php">Change Password</a></li>
		<li><a href="../Controller/logout.php">Logout</a></li>
	</ul>
</div>
</td>

<td align="center">
<legend>Edit Profile Details</legend>
	<form class="" id="inform" action="../Controller/editadminCheck.php" onsubmit="return validation()" method="post">
		<table>
			<tr>
				<td colspan="2">
					<center>
						<div id="error_messege">
						</div>
					</center>
			</tr>
			<tr>
				<td>ID</td>
				<td>: <input type="text" id="id" name="id" disabled value="<?php echo $viemyinfo['id']; ?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>: <input type="text" id="name" name="name" value="<?php echo $viemyinfo['name']; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: <input type="email" id="email" name="email" value="<?php echo $viemyinfo['email']; ?>"></td>
			</tr>

		</table>
		<hr>
		<input class="btn btn-outline-warning" type="submit" name="submit" value="Submit">
	</form>


</td>
</tr>
</table>
</td>
</tr>




<?php include('footer.php'); ?>