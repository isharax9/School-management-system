<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$User = getUserById($_COOKIE['ID']);
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Edit Profile</title>
    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/EditCheck(script).js"></script>
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
        <td align="center">
          <fieldset>
            <legend class="textlegend" >EDIT PROFILE</legend>
            <form class="" id="EditProfile" action="../Controller/EditCheck.php" method="post" onsubmit="return EditProfile()">

              <table>
                <tr>
                  <td>ID</td>
                  <td>: <input type="text" id="id" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td>: <input type="text" id="uname" name="uname" value="<?php echo $User['name']; ?>"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>: <input type="email" id="email" name="email" value="<?php echo $User['email']; ?>"></td>
                </tr>
                <tr>
                  <td>Mobile No.</td>
                  <td>: <input type="text" id="mobile" name="mobile" value="<?php echo $User['mobile']; ?>"></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>:<input type="radio" name="gender" <?php if ($User['gender'] == "male") { ?> checked="true" <?php } ?> value="male">Male
                    <input type="radio" id="gender" name="gender" <?php if ($User['gender'] == "female") { ?> checked="true" <?php } ?> value="female">Female
                    <input type="radio" id="gender" name="gender" <?php if ($User['gender'] == "other") { ?> checked="true" <?php } ?> value="other">Other
                  </td>
                </tr>
                <tr>
                  <td>Date of Birth</td>
                  <td>: <input type="date" id="dob" name="dob" value="<?php echo $User['dob']; ?>"></td>
                </tr>

                <tr>

                </tr>

              </table>
              <hr>
              <input type="submit" name="submit" value="Submit">
              <center>
                <div id="error_messege">
                </div>
              </center>


            </form>
          </fieldset>
        </td>
        <td align="center"><img height="400px" weight="80px" src="../Resources/Teacher.svg" alt=""></td>
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