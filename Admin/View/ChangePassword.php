<?php
	$title= "Change Password";
	$js = "../Script/ChangPassVal.js";
	include('header.php');

?>
<div id="sidebar" class="">
                <ul>
                  <li><a href="Dashboard.php">Dashbord</a></li>
                  <li><a href="viewProfile.php">View Profile</a></li>
                  <li><a href="EditProfile.php">Edit Profile</a></li>
                  <li><a href="ChangePassword.php">Change Password</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>
                </ul>
              </td>
							

							</div>

              <td>
								<form class="" id="inform" action="../controller/chaPassCheck.php" onsubmit="return validation()" method="post">
			            <fieldset>
			              <legend>CHANGE PASSWORD</legend>
			              <table>
											<tr>
												<td colspan="2">
													<center>
													<div id="error_messege">
													</div>
												</center>
											</tr>
			                <tr>
			                  <td>Current Password:</td>
			                  <td><input type="password" id="cpas" name="cpas" value=""></td>
			                </tr>
			                <tr>
			                  <td>New Password:</td>
			                  <td><input type="password" id="npass" name="npass" value=""></td>
			                </tr>
			                <tr>
			                  <td>Retype New Password:</td>
			                  <td><input type="password" id="rnpass" name="rnpass" value=""></td>
			                </tr>
			              </table>
			              <hr>
			              <input type="submit" name="Change" value="Change"> <br>
			            </fieldset>
			          </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>


  <?php include('footer.php'); ?>
