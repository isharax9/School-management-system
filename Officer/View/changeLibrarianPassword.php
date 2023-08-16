<?php $title= "Reset Password";
include('header.php');
   ?> 

    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="../Controller/logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
 
      <tr id="navigation">
        <td width="350px">
          <h2 align="center"><a href="viewOfficerProfile.php">My Profile</a></h2></h2>
          <hr>
          <div id="sidebar">
          <ul>
            <li><a href="addnewbook.php">Add New Book</a></li>
            <li><a href="allBooksInfo.php">All Book Information</a></li>
            <li><a href="viewStudentsList.php">View Students List</a></li>
            <li><a href="viewTeachersList.php">View Teachers List</a></li>
            <li><a href="noticeForm.php">New Book Arrival Notice</a></li>
            <li><a href="studentLibraryAcc.php">Create Student Library Account</a></li>
            <li><a href="viewAllStudentsLibProfile.php">View Student Library Account</a></li>
            <li><a href="issueNewBook.php">Add Issue Book</a></li>
            <li><a href="issuedBookHistory.php">Issue Book History</a></li>
            <li><a href="searchBookInfo.php">searchBookInfo</a></li>
          </ul>
          </div>
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
        <div id="chngpass">
        <form action="../Controller/changeOfficerPassCheck.php" method="POST">
          <table align="center">
          <tr>
            <td>Current Password:</td>
            <td><input type="password" name="password" value=""></td>
          </tr>
          <tr>
            <td>New Password:</td>
            <td><input type="password" name="newpassword" value=""></td>
          </tr>
          <tr>
            <td>Retype New Password:</td>
            <td><input type="password" name="repassword" value=""></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="changepassword" value="Change Password" id="commonbttnforall"></td>
          </tr>
         </table>
         </form>
         </div>
        </td>
      </tr>

<?php include('footer.php'); ?>   