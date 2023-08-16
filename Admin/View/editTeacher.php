<?php
	$title= "Update teacher";
	$js = "../Script/editValidation.js";
	include('header.php');
	include_once('../model/teacherModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
						<div id="sidebar" class="">
                <ul>
                  <li><a href="addTeacher.php">Add Teacher</a></li>
                  <li><a href="viewTeacher.php">View Teacher</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>

                </ul>
							</div>
              </td>
              <td>
                <form id="inform" action="../controller/updateCheckTeacher.php" onsubmit="return validation()" method="post">

                <fieldset>
                  <legend>Update Information</legend>
                    <table align="center">
											<tr>
												<td colspan="2">
													<center>
													<div id="error_messege">
													</div>
												</center>
											</tr>
											<tr>
                        <td>Id</td>
                        <td>:<input type="text" id="id" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td>:<input type="text" id="name" name="name" value="<?php echo $updatemyinfo['name']; ?>" placeholder="Enter Full Name"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:<input type="email" id="email" name="email" value="<?php echo $updatemyinfo['email']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Mobile No</td>
                        <td>:<input type="text" id="mobile" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>"></td>
                      </tr>


                      <tr>
                        <td>Gender</td>
                        <td>
                          :<input type="radio" id="gender" name="gender" <?php  if($updatemyinfo['gender']=="male"){?> checked="true" <?php } ?> value="male">Male
                          <input type="radio" id="gender" name="gender"  <?php if($updatemyinfo['gender']=="female"){?> checked="true" <?php } ?>  value="female">Female
                          <input type="radio" id="gender" name="gender" <?php if($updatemyinfo['gender']=="other"){?> checked="true" <?php } ?> value="other">Other
                        </td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>:<input type="date" id="dob" name="dob" value="<?php echo $updatemyinfo['dob']; ?>"></td>
                      </tr>
											<tr>
												<td>Subject</td>
												<td>:<select id="subject" name="subject">
														<option <?php  if($updatemyinfo['subject']=="Bangla"){?> selected="true" <?php } ?> value="Bangla">Bangla</option>
														<option <?php  if($updatemyinfo['subject']=="English"){?> selected="true" <?php } ?> value="English">English</option>
														<option <?php  if($updatemyinfo['subject']=="Math"){?> selected="true" <?php } ?> value="Math">Math</option>
														<option <?php  if($updatemyinfo['subject']=="Bangladesh and global studies"){?> selected="true" <?php } ?> value="Bangladesh and global studies">Bangladesh and global studies</option>
														<option <?php  if($updatemyinfo['subject']=="Religion"){?> selected="true" <?php } ?> value="Religion">Religion</option>
														<option <?php  if($updatemyinfo['subject']=="Physical education and health"){?> selected="true" <?php } ?> value="Physical education and health">Physical education and health</option>
													</select>
												</td>
											</tr>
                    </table>
                    <hr>
                    <center>
                      <input type="submit" name="update" value="Update">

                  </center>
                </fieldset>







            </td>
            </tr>
            </table>
            </td>
            </tr>




            <?php include('footer.php'); ?>
