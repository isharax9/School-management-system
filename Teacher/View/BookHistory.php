<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
	$List = getAllBooks();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <script src="../Script/BookHistorySearch(script).js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Book.jpg" alt=""></td>
            <td align="Center">
            <b>
              Book Arrival List
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
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
        <td>
            <fieldset>
                <legend>LIST OF BOOKS</legend>
            <form class="" action="" method="post">
            <center>
									<b>Find Book:</b><input type="text" name="name" id="name">
									<input type="button" name="" value="Find" onclick="ajax()">
								</center>
					<div id="myh1" class="">
									<br>
            <?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ISBN</td>
								    <td>Title</td>
								    <td>Author</td>
								    <td>Edition</td>
								</tr>";
								for($i = 0; $i<count($List); $i++){
								    echo "<tr align = 'center'>
								    <td>{$List[$i]['isbn']}</td>
								    <td>{$List[$i]['title']}</td>
								    <td>{$List[$i]['author']}</td>
								    <td>{$List[$i]['edition']}</td>
								</tr>";
								}
								echo "</table>";
								?>
            </div>
            </form>
            </fieldset>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
