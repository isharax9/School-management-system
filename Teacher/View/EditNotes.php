<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
	$User =  getNotesById($Id);
  $_SESSION['id'] = $Id;
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
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Course.jpg" alt=""></td>
            <td align="Center">
            <b>
              Notes Re-upload
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
                <td width="270px">
          <div id="sidebar">
            <ul>
                            <li><a href="TeacherDashboard.php">Dashboard</a></li>
              <li><a href="ViewProfile.php">View Profile</a></li>
              <li><a href="EditProfile.php">Edit Profile</a></li>
              <li><a href="StudentList.php">View Student's Profile</a></li>
              <li><a href="UploadAssignment.php">Add Assignment</a></li>
              <li><a href="UploadNotes.php">Add Lesson Notes</a></li>
              <li><a href="ViewUploadedNotes(Student).php">View Answer Sheets</a></li>
              <li><a href="NoticeBoard.php">Student Notices</a></li>
              <li><a href="ViewSchoolNotice.php">View Public Notices</a></li>             
              <li><a href="StudentListMarks.php">Student Marks</a></li>
              <li><a href="LeaveRequest.php">Student Leave Request</a></li>
              <li><a href="ChangePass.php">Reset Password</a></li>
              <li><a href="../Controller/Logout.php">Logout</a></li>
            </ul>
          </div>
        </td>

        </td>
        <td>
            <fieldset>
                <legend>NOTES UPDATE</legend>
            <form class="" name="Upload" action="../Controller/EditNotesCheck.php" method="post" enctype="multipart/form-data" onsubmit="return FileUpload()">
            <table align="center">
                <tr>
                <td>ID</td>
                <td>:<input type="number" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
               </tr>
               <tr>
                <td>Notes</td>
                <td>: <input type="file" name="photo"></td>
               </tr>
               <tr>
                <td>Time</td>
                <td>:<input type="text" name="time" disabled value="<?php echo $User['time']; ?>"></td>
               </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                    </center>
                    <center>
                       <div id="error_messege">
                       </div>
                    </center>
            </form>
            </fieldset>
        </td>
        <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
