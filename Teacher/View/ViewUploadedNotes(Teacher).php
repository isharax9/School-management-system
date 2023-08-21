<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$GetNotes = getAllTeacherNotes();
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Uploaded Lesson Notes</title>
    <script src="../Script/TeacherUploadedNotesSearch(script).js"></script>
  </head>

  <body>
    <table border="1" cellspacing="0" width="80%">
      <?php include("TeacherHeader.php") ?>
      <tr>

        
        <td width="270px">
          <div id="sidebar">
            <ul>
              <li><a href="TeacherDashboard.php">Dashboard</a></li>
                            <li><a href="ViewProfile.php">View Profile</a></li>
                            <li><a href="StudentList.php">View Student's Profile</a></li>
                            <li><a href="UploadAssignment.php">Add Assignment</a></li>
                            <li><a href="UploadNotes.php">Add Lesson Notes</a></li>
                            <li><a href="ViewUploadedNotes(Student).php">View Answer Sheets</a></li>
                            <li><a href="assignmentDashboard.php">Download Answer Sheets</a></li>
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
            <legend class="textlegend" >NOTES</legend>
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
                    <td>Action</td>
								</tr>";
                for ($i = 0; $i < count($GetNotes); $i++) {
                  echo "<tr align = 'center'>
								    <td>{$GetNotes[$i]['id']}</td>
								    <td>{$GetNotes[$i]['notes']}</td>
								    <td>{$GetNotes[$i]['time']}</td>
                    <td> <a href='EditNotes.php?id={$GetNotes[$i]['id']}'> Edit </a> | <a href='DeleteNotes.php?id={$GetNotes[$i]['id']}'> Delete </a>  </td>
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