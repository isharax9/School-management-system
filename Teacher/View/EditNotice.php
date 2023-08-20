<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$Id = $_GET['id'];
$User =  getNoticeById($Id);
$_SESSION['id'] = $Id;
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Edit Notices</title>
    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/NoticeCheck(script).js"></script>
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
            <legend class="textlegend">EDIT NOTICE</legend>
            <form class="" id="EditNotice" action="../Controller/UpdateNoticeCheck.php" method="post" onsubmit="return Notice()">
              <table>
                <tr>
                  <td>ID</td>
                  <td>:<input type="number" id="id" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
                </tr>
                <tr>
                  <td>Notice</td>
                  <td>:<textarea id="notice" name="notice" rows="8" cols="80"><?php echo $User['notice']; ?></textarea></td>
                </tr>
                <tr>
                  <td>Time</td>
                  <td>:<input type="text" id="times" name="times" disabled value="<?php echo $User['time']; ?>"></td>
                </tr>
              </table>
              <hr>
              <input type="submit" name="update" value="Update">
              <center>
                <div id="error_messege">
                </div>
              </center>
            </form>
          </fieldset>
        </td>
        <td align="center"><img height="200px" weight="80px" src="../Resources/notice.jpg" alt=""></td>
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