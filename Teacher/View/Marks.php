<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$Id = $_GET['id'];
$User =  getStudentById($Id);
$_SESSION['id'] = $Id;
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>marks update</title>
    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/MarksUpdateCheck(script).js"></script>
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
            <legend class="textlegend">MARKS update</legend>
            <form class="" id="MarksUpload" action="../Controller/MarksCheck.php" method="post" onsubmit="return Marks()">
              <table>
                <tr>
                  <td>ID</td>
                  <td>:<input type="number" id="id" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td>:<input type="text" id="name" name="name" disabled value="<?php echo $User['name']; ?>"></td>
                </tr>
                <tr>
                  <td>Class</td>
                  <td>:<input type="text" id="class" name="class" disabled value="<?php echo $User['class']; ?>"></td>
                </tr>
                <tr>
                  <td>Roll</td>
                  <td>:<input type="number" id="roll" name="roll" disabled value="<?php echo $User['roll']; ?>"></td>
                </tr>
                <tr>
                  <td>Update Marks</td>
                  <td>
                    :<input type="text" id="marks" name="marks" value="<?php echo $User['marks']; ?>">
                  </td>
                </tr>
              </table>
              <hr>
              <center>
                <input type="submit" name="upload" value="Submit">
              </center>
              <center>
                <div id="error_messege">
                </div>
              </center>
            </form>
          </fieldset>
        </td>
        <td align="center"><img height="200px" weight="80px" src="../Resources/grades.svg" alt=""></td>
       
    </table>
 <?php include("TeacherFooter.php") ?>
  </body>

  </html>


<?php

} else {
  header('location: LoginPage.php');
}

?>