<?php
$title = "view profile";
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
	<fieldset>
		<legend>View Profile Information</legend>
		<table>
			<tr>
				<td>ID</td>
				<td>:
					<?php echo $viemyinfo['id']; ?>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:
					<?php echo $viemyinfo['name']; ?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:
					<?php echo $viemyinfo['email']; ?>
				</td>
			</tr>
		</table>
		<hr>
		<a href="EditProfile.php"><button class="btn btn-dark" >Edit Profile</button></a>


</td>
</tr>
</table><?php include('footer.php'); ?>
</fieldset>
</td>
</tr>




