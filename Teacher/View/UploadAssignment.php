<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$User = getUserById($_COOKIE['ID']);
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Add Assignment</title>
    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/FileUploadCheck(script).js"></script>
  </head>

  <body>
    <table border="0" cellspacing="0" width="100%">
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
              <li><a href="ViewSchoolNotice.php">Admin Notices</a></li>
              <li><a href="StudentListMarks.php">Student Marks</a></li>
              <li><a href="LeaveRequest.php">Student Leave Request</a></li>
              <li><a href="ChangePass.php">Reset Password</a></li>
              <li><a href="../Controller/Logout.php">Logout</a></li>
            </ul>
          </div>
        </td>
        <td>
          <table> 
            <form class="" name="Upload" action="../Controller/UploadNotesCheck.php" method="post" enctype="multipart/form-data" onsubmit="return FileUpload()">
             
              <fieldset align="center">

                <legend class="textlegend">Add Assignment</legend>
                <Br></Br>
                <input type="file" name="photo"><br>
                <Hr>
                <Div class="left"><input type="submit" name="submit" value="submit"></Div><br>
                <a class="btn btn-outline-success" href="ViewUploadedNotes(Teacher).php" role="button"> View Uploaded Assignment</a>


                <div id="error_messege"></div>


              </fieldset>

            </form>
          </table>
          <td align="center"><img height="200px" weight="300px" src="../Resources/cathode-ray-tube.jpg" alt=""></td>
        </td>
      </tr>

    </table>

  </body>
  <?php include("TeacherFooter.php") ?>

  </html>


<?php

} else {
  header('location: LoginPage.php');
}

?>