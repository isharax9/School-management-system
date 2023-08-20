<?php
$title = "Reset Password";
$javascript = "../Script/passval.js";
include('header.php');
?>

<?php include('sideBar.php'); ?>


<td align="center">
	<form class="" action="../controller/passCheck.php" onsubmit="return val()" method="post">
		<fieldset>
			<legend class="textlegend">CHANGE PASSWORD</legend>
			<table>
				<tr>
					<td>Current Password:</td>
					<td><input type="password" id="currentpass"  name="cpas" value=""></td>
				</tr>
				<tr>
					<td>New Password:</td>
					<td><input type="password" id="newpass" name="npass" value=""></td>
				</tr>
				<tr>
					<td>Retype New Password:</td>
					<td><input type="password" id="retypepass" name="rnpass" value=""></td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
							<div id="error_messege">
							</div>
						</center>
					</td>
					</tr>
			</table>
			<hr>
			<input type="submit" name="Change" value="Change"> <br>
		</fieldset>
	</form>
</td><td align="center" ><img height="350px" weight="50%" src="../Resources/passwordChange.png"></td>
</tr>
<?php include('footer.php'); ?>