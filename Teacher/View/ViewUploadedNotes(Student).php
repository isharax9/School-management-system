<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$GetNotes = getAllStudentNotes();
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>View Answer Sheets</title>
    <script src="../Script/UploadedNotesSearch(script).js"></script>
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
        <td align="center" >
          <fieldset>
            <legend class="textlegend">View Assignment Answer Sheets </legend>
            <form class="" action="" method="post">
              <center>
                <b>Find Notes:</b><input type="text" name="name" id="name">
                <input type="button" name="" value="Find" onclick="ajax()">
              </center>
              <div id="myh1" class="">
                <br>
                <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Notes</td>
								    <td>Time</td>
								</tr>";
                for ($i = 0; $i < count($GetNotes); $i++) {
                  echo "<tr align = 'center'>
								    <td>{$GetNotes[$i]['id']}</td>
								    <td>{$GetNotes[$i]['notes']}</td>
								    <td>{$GetNotes[$i]['time']}</td>
								</tr>";
                }
                echo "</table>";
                ?>
              </div>
            </form>
          </fieldset>
        </td>
        <td align="center"><img height="200px" weight="80px" src="../Resources/Course.jpg" alt=""></td>
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