<?php  
$title= "Edit Student Officer Profile";
include('header.php');
require_once('../Model/usersmodel.php');
$roll = $_GET['id'];
$editLibProfile =  viewStudentLibProfile($roll);
$_SESSION['roll'] = $roll;
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
          <h3 align="center"><a href="dashboard.php">Go to Dashboard</a></h3></br>
          <hr>
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
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
        <form action="../Controller/editStudentLibProfileCheck.php" method="POST">
          <table align="center">
                    <tr>
                        <td>Roll :</td>
                        <td><input type="roll" name="roll" disabled value="<?php echo $editLibProfile['id']; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" value="<?php echo $editLibProfile['name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Mail :</td>
                        <td><input type="mail" name="mail" value="<?php echo $editLibProfile['mail']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td><input type="text" name="gender" disabled value="<?php echo $editLibProfile['gender']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="editstudentlibprofile" value="Update Profile"></td>
                    </tr>
            </table>
          </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   