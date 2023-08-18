<?php
	$title= "Add course";
	$js = "../Script/addCourseVal.js";
	include('header.php');
?>
								<div id="sidebar" class="">
								<ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>
                </ul>
              </td>


							</div>

              <td>
                <form id="inform" class="" action="../Controller/addCheckCourse.php" onsubmit="return validation()" method="post">
                  <fieldset >
                    <legend class="text3" align="center">Create Course</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
														<center>
														<div id="error_messege">
														</div>
													</center>
												</tr>
                        <tr>
                          <td>Course Name</td>
                          <td>:<input type="text" id="name" name="name" placeholder=""></td>
                        </tr>
                        <tr>
                          <td>Class</td>
                          <td>:<select id="classE" name="class">
                              <option value="Six">Six</option>
                              <option value="Seven">Seven</option>
                              <option value="Eight">Eight</option>
                              <option value="Nine">Nine</option>
                              <option value="Ten">Ten</option>
                            </select>
                          </td>
                        <tr>
                          <td>Description</td>
                          <td><textarea name="description" id="description" rows="3" cols="20"></textarea></td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>
<?php include('footer.php'); ?>
