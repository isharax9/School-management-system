<?php
	$title= "view course";
	include('header.php');
	include_once('../model/courseModel.php');
	$UsersList = allUserList();
?>
<div id="sidebar" class="">
                <ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>
                </ul>
							</div>
              </td>

              <td>
                <center><h2>Course list</h2></center>

								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>Course ID</td>
								    <td>Course Name</td>
								    <td>Class</td>
								    <td>description</td>
										<td>Action</td>

								</tr>";
								for($i = 0; $i<count($UsersList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$UsersList[$i]['id']}</td>
								    <td>{$UsersList[$i]['course_name']}</td>
								    <td>{$UsersList[$i]['class']}</td>
								    <td>{$UsersList[$i]['description']}</td>
								    <td> <a href='editCourse.php?id={$UsersList[$i]['id']}'> Update </a> | <a href='deleteCourse.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
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
