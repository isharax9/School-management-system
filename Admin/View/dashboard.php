<?php
$title = "Dashbord";
include('header.php');
?>
<div id="sidebar" class="">
  <ul>
    <li><a href="Dashboard.php">Dashbord</a></li>
    <li><a href="viewProfile.php">View Profile</a></li>
    <li><a href="EditProfile.php">Edit Profile</a></li>
    <li><a href="ChangePassword.php">Change Password</a></li>
    <li><a href="../Controller/logout.php">Logout</a></li>
  </ul>
</div>
</td>

<td>
  <table id="box" border="0" width="100%" cellspacing="">
    <tr>
      <td align="center">
        <a href="addTeacher.php"><img height="150px" weight="100px" src="../Resources/Teacher.svg" alt=""></a>
        <br>
        <a href="addTeacher.php">Teacher</a>
      </td>

      <td align="center">
        <a href="addStudent.php"><img height="150px" weight="100px" src="../Resources/student.svg" alt=""></a>
        <br>
        <a href="addStudent.php">Student</a>
      </td>

      <td align="center">
        <a href="addOfficer.php"><img height="150px" weight="100px" src="../Resources/Customer Service Character.svg" alt=""></a>
        <br>
        <a href="addOfficer.php">Officer</a>
      </td>

    </tr>

    <tr>
      <td align="center">
        <a href="postNotice.php"><img height="150px" weight="100px" src="../Resources/notice.svg" alt=""></a>
        <br>
        <a href="postNotice.php">Notice Board</a>
      </td>

      <td align="center">
        <a href="StudentListMarks.php"><img height="150px" weight="100px" src="../Resources/marks.svg" alt=""></a>
        <br>
        <a href="StudentListMarks.php">Check Results</a>
      </td>

      <td align="center">
        <a href="addCourse.php"><img height="150px" weight="100px" src="../Resources/courses.png" alt=""></a>
        <br>
        <a href="addCourse.php">Courses</a>
      </td>

    </tr>
    <tr>
    <td align="center">
      
    </td>
    


      <td align="center">

      </td>



      <td align="center">
<a href="leaveRequest.php"><img height="130px" weight="130px" src="../Resources/studyleave.svg" alt=""></a>
      <br>
      <a href="leaveRequest.php">Leave Request</a>
      </td>
    </tr>



  </table>
</td>
</tr>
<br>
</table>
</td>
</tr>

<?php include('footer.php'); ?>