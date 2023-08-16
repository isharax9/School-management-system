<?php
	session_start();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <style media="screen">
      #error_messege{
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/FileUploadCheck(script).js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
         <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/course.jpg" alt=""></td>
            <td align="Center">
            <b>
            Notes Upload
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
                    <li><a href="ViewProfile.php">Book History</a></li>
                    <li><a href="ChangePass.php">Reset Password</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <form class="" name="Upload" action="../Controller/UploadNotesCheck.php" method="post" enctype="multipart/form-data" onsubmit="return FileUpload()">
                    <fieldset>
                      <legend>Upload Notes</legend>
                      <input type="file" name="photo"><br>
                      <hr>
                      <input type="submit" name="submit" value="submit">
                      <a href="ViewUploadedNotes(Teacher).php"> View Uploaded Notes</a>
                      <center>
                         <div id="error_messege">
                         </div>
                      </center>
                    </fieldset>
              
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
