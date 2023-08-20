<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
  $User = getUserById($_COOKIE['ID']);
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body><?php include("TeacherHeader.php") ?>
    <table border="1" cellspacing="0" width="80%" >
    
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/routine.jpg" alt=""></td>
            <td align="Center">
            <b>
            Class Schedule
            </b>
            </td>
          </tr>
        <td width="150px">
                <td width="250px">
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
            <form class="" action="" method="post">
               <table>
               <tr>
                <td>Teacher's Name</td>
                <td>:<?php echo $User['name'];?></td>
               </tr>
               <tr>
                <td>Subject</td> 
                <td>:<?php echo $User['subject'];?></td>
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
