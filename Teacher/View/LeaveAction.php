<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$Sl = $_GET['id'];
$User = getLeaveById($Sl);
$_SESSION['sl'] = $Sl;
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>leave request action</title>

    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/LeaveCheck(script).js"></script>
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
            <legend class="textlegend">LEAVE REQUEST Action</legend>
            <form class="" id="LeaveRequest" action="../Controller/LeaveCheck.php" method="post" onsubmit="return LeaveRequest()">

              <table>
                <tr>
                  <td>ID</td>
                  <td>: <input type="number" id="id" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td>: <input type="text" id="name" name="name" disabled value="<?php echo $User['name']; ?>"></td>
                </tr>
                <tr>
                  <td>Leave_From</td>
                  <td>: <input type="text" id="leave_from" name="leave_from" disabled value="<?php echo $User['leave_from']; ?>"></td>
                </tr>
                <tr>
                  <td>Leave_To</td>
                  <td>: <input type="text" id="leave_to" name="leave_to" disabled value="<?php echo $User['leave_to']; ?>"></td>
                </tr>
                <tr>
                  <td>Action</td>
                  <td>:<input type="radio" id="request" name="request" value="Accepted">Accepted
                    <input type="radio" id="request" name="request" value="Rejected">Rejected
                  </td>
                </tr>

              </table>
              <hr>
              <input type="submit" name="submit" value="Update">
              <center>
                <div id="error_messege">
                </div>
              </center>


            </form>
          </fieldset>
        </td>
        <td align="center"><img height="200px" weight="80px" src="../Resources/marks.png" alt=""></td>
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