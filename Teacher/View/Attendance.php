<?php
	session_start();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/attendance.jpg" alt=""></td>
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
                    <li><a href="Attendance.php">Student Attendance</a></li>
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
               <table border="1">
               <tr>
                <td>Name</td>
                <td>ID</td>
                <td>Gender</td>
                <td>Class</td>
                <td>Section</td>
                <td>Roll</td>
                <td colspan="2" align="center">Attendance</td>
               </tr>
               <tr>
                <td><a href="StudentProfile.php">Kowshik</a></td>
                <td>4</td>
                <td>Male</td>
                <td>Seven</td>
                <td>A</td>
                <td>10</td>
                 <td><input type="checkbox" name="check" value="check">Present | <input type="checkbox" name="check" value="check">Absent</td>
               </tr>
               <tr>
                <td><a href="StudentProfile.php">Anirban</a></td> 
                <td>5</td>
                <td>Male</td>
                <td>Seven</td>
                <td>A</td>
                <td>12</td>
                <td><input type="checkbox" name="check" value="check">Present | <input type="checkbox" name="check" value="check">Absent</td>
               </tr>
               <tr>
                <td><a href="StudentProfile.php">Kader</a></td> 
                <td>6</td>
                <td>Male</td>
                <td>Seven</td>
                <td>A</td>
                <td>15</td>
                <td><input type="checkbox" name="check" value="check">Present | <input type="checkbox" name="check" value="check">Absent</td>
               </tr>
               <tr>
                <td><a href="StudentProfile.php">Bishowjit</a></td> 
                <td>7</td>
                <td>Male</td>
                <td>Seven</td>
                <td>A</td>
                <td>12</td>
                <td><input type="checkbox" name="check" value="check">Present | <input type="checkbox" name="check" value="check">Absent</td>
               </tr>
               <tr>
                <td><a href="StudentProfile.php">Carlos</a></td>
                <td>8</td>
                <td>Male</td>
                <td>Seven</td> 
                <td>A</td>
                <td>18</td>
                <td><input type="checkbox" name="check" value="check">Present | <input type="checkbox" name="check" value="check">Absent</td>
               </tr>
               <tr>
                <td><a href="StudentProfile.php">Mac</a></td> 
                <td>9</td>
                <td>Male</td>
                <td>Seven</td>
                <td>A</td>
                <td>20</td>
                <td><input type="checkbox" name="check" value="check">Present | <input type="checkbox" name="check" value="check">Absent</td>
               </tr>
               </table>
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
