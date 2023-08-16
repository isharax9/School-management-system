<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
	$StudentList = getAllUser();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <script src="../Script/StudentFind(script).js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Student.jpg" alt=""></td>
            <td align="Center">
            <b>
              Student List
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
                <ul>
                    <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="StudentList.php">View Student's Profile</a></li>
                    <li><a href="Schedule.php">Class Schedule</a></li>
                    <li><a href="NoticeBoard.php">Notice Board</a></li>
                    <li><a href="ViewSchoolNotice.php">School Notice</a></li>
                    <li><a href="UploadNotes.php">Upload Notes</a></li>
                    <li><a href="ViewUploadedNotes(Student).php">See Student Notes</a></li>
                    <li><a href="StudentListMarks.php">Student Marks</a></li>
                    <li><a href="LeaveRequest.php">Student Leave Request</a></li>
                    <li><a href="BookHistory.php">Book History</a></li>
                    <li><a href="ChangePass.php">Reset Password</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>STUDENT LIST</legend>
            <form class="" action="" method="post">

               <center>
									<b>Find Student:</b><input type="text" name="name" id="name">
									<input type="button" name="" value="Find" onclick="ajax()">
								</center>
					<div id="myh1" class="">
									<br>

            <?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
								    <td>Email</td>
								    <td>Mobile</td>
										<td>Gender</td>
										<td>Date of Birth</td>
                    <td>Class</td>
                    <td>Section</td>
                    <td>Roll</td>
                    <td>Present Address</td>
								    <td>Profile View</td>
								</tr>";
								for($i = 0; $i<count($StudentList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$StudentList[$i]['id']}</td>
								    <td>{$StudentList[$i]['name']}</td>
								    <td>{$StudentList[$i]['email']}</td>
								    <td>{$StudentList[$i]['mobile']}</td>
										<td>{$StudentList[$i]['gender']}</td>
										<td>{$StudentList[$i]['dob']}</td>
                    <td>{$StudentList[$i]['class']}</td>
                    <td>{$StudentList[$i]['section']}</td>
                    <td>{$StudentList[$i]['roll']}</td>
                    <td>{$StudentList[$i]['p_address']}</td>
								    <td> <a href='StudentProfile.php?id={$StudentList[$i]['id']}'> View Profile </a></td>
								</tr>";
								}
								echo "</table>";
								?>

          </div>
               
               
            </form>
            </fieldset>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
