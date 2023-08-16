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
    <script src="../Script/ChangePassCheck(script).js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/password.webp" alt=""></td>
            <td align="Center">
            <b>
              Password Change
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
                <legend>PASSWORD CHANGE</legend>
            <form class="" id="ChangePassword" action="../Controller/ChangePassCheck.php" method="post" onsubmit="return ChangePassword()">
               <table border="1">
			   <tr>
			                  <td>Current Password:</td>
			                  <td><input type="password" id ="password" name="password" value=""></td>
			                </tr>
			                <tr>
			                  <td>New Password:</td>
			                  <td><input type="password" id="newpass" name="newpassword" value=""></td>
			                </tr>
			                <tr>
			                  <td>Retype New Password:</td>
			                  <td><input type="password" id="repass" name="repassword" value=""></td>
			                </tr>
               </table>
			             <hr>
			              <input type="submit" name="Change" value="Change"> <br>
                    <center>
                       <div id="error_messege">
                       </div>
                     </center>
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

