<?php 
$title= "View Librarian Profile";
require_once('../Model/usersmodel.php');
include('header.php');
$librarianid = $_SESSION['librarianid'];
$librarianinfo =  viewLibrarianProfile($librarianid);
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
        <h2 align="center"><a href="viewLibrarianProfile.php">My Profile</a></h2></h2>
          <h3 align="center"><a href="dashboard.php">Go to Dashboard</a></h3></br>
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
        <td id="main content">
        <div id="notice">
        <table border="1">
        <tr>
            <th>Librarian ID</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Mobile No.</th>
            <!-- <th>Address</th> -->
            <th>Action</th>
        </tr>
        <tr>
            <td><?php echo $librarianinfo['id']; ?></td>
            <td><?php echo $librarianinfo['name']; ?></td>
            <td><?php echo $librarianinfo['email']; ?></td>
            <td><?php echo $librarianinfo['gender']; ?></td>
            <td><?php echo $librarianinfo['dob']; ?></td>
            <td><?php echo $librarianinfo['mobile']; ?></td>
            <!-- <td><?php echo $librarianinfo['p_address']; ?></td> -->
            <td><a href="changeLibrarianPassword.php">Reset Password</a></td>
        </tr>
   </table></div>
    </div>

<?php include('footer.php'); ?>   
 