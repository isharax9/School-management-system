<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$GetNotice = getAllNotice();
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>View Notice</title>
  </head>

  <body>
    <table border="1" cellspacing="0" width="80%">
      <?php include("TeacherHeader.php") ?>
      <tr>


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
        <td align="center">
          <fieldset>
            <legend class="textlegend">View Posted Notice</legend>
            <form class="" action="" method="post">
              <?php
              echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Notice</td>
								    <td>Time</td>
                    <td>Action</td>
								</tr>";
              for ($i = 0; $i < count($GetNotice); $i++) {
                echo "<tr align = 'center'>
								    <td>{$GetNotice[$i]['id']}</td>
								    <td>{$GetNotice[$i]['notice']}</td>
								    <td>{$GetNotice[$i]['time']}</td>
                    <td> <a href='EditNotice.php?id={$GetNotice[$i]['id']}'> Edit </a> | <a href='DeleteNotice.php?id={$GetNotice[$i]['id']}'> Delete </a>  </td>
								</tr>";
              }
              echo "</table>";
              ?>
            </form>
          </fieldset>
        </td><td align="center"><img height="200px" weight="80px" src="../Resources/notice.jpg" alt=""></td>
      </tr>
      
    </table>
<?php include("TeacherFooter.php") ?>
  </body>

  </html>


<?php

} else {
  header('location: LoginPage.php');
}

?>