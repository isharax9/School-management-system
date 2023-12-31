<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Reset Password</title>
    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/ChangePassCheck(script).js"></script>
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
        <td align="center">
          <fieldset>
            <legend class="textlegend">PASSWORD CHANGE</legend>
            <form class="" id="ChangePassword" action="../Controller/ChangePassCheck.php" method="post" onsubmit="return ChangePassword()">
              <table border="0">
                <tr>
                  <td>Current Password:</td>
                  <td><input type="password" id="password" name="password" value=""></td>
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
        <td align="center"><img height="200px" weight="80px" src="../Resources/password.webp" alt=""></td>
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