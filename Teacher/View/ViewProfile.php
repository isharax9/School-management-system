<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$User = getUserById($_COOKIE['ID']);
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Public Home</title>
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
              <li><a href="UploadNotes.php">Add Assignment</a></li>
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
        <td align="center">
          <fieldset>
            <legend class="textlegend" >View Profile</legend>
            <form action="" method="post">
              <table>
                <tr>
                  <td>Name</td>
                  <td>:<?php echo $User['name']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:<?php echo $User['email']; ?></td>
                </tr>
                <tr>
                  <td>Mobile No.</td>
                  <td>:<?php echo $User['mobile']; ?></td>
                </tr>
                <tr>
                  <td>ID</td>
                  <td>:<?php echo $User['id']; ?></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>:<?php echo $User['gender']; ?></td>
                </tr>
                <tr>
                  <td>Date of Birth</td>
                  <td>:<?php echo $User['dob']; ?></td>
                </tr>
              </table>
              <hr>
              <a class="btn btn-dark" href="../View/EditProfile.php" role="button">Edit details</a>
              
            </form>
          </fieldset>
        </td>
        <td>
        <td align="center"><img height="200px" weight="80px" src="../Resources/Screenshot (1272).png" alt="profile picture"></td>
        <td align="center">
          <b>
            Logged in as,<br>
            <?php echo $User['name']; ?><br>
            (Teacher)
          </b>
        </td>
        </td>
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