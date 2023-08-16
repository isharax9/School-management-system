<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
  $User = getUserById($_COOKIE['ID']);
	$MarksList = getAllUser();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <script src="../Script/StudentMarksSearch(script).js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/grades.svg" alt=""></td>
            <td align="Center">
            <b>
              Marks List
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
                <legend>STUDENT MARKS LIST</legend>
            <form class="" action="" method="post">
                <center>
									<b>Find Student Marks:</b><input type="text" name="name" id="name">
									<input type="button" name="" value="Find" onclick="ajax()">
								</center>
					<div id="myh1" class="">
									<br>
            <?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
                    <td>Subject</td>
                    <td>Roll</td>
                    <td>Marks</td>
								    <td>Marks Update</td>
                    <td>Marks Delete</td>
								</tr>";
								for($i = 0; $i<count($MarksList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$MarksList[$i]['id']}</td>
								    <td>{$MarksList[$i]['name']}</td>
                    <td>{$User['subject']}</td>
                    <td>{$MarksList[$i]['roll']}</td>
                    <td>{$MarksList[$i]['marks']}</td>
								    <td> <a href='Marks.php?id={$MarksList[$i]['id']}'> Update </a></td>
                    <td> <a href='DeleteMarks.php?id={$MarksList[$i]['id']}'> Delete </a> </td>
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