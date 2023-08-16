<?php 
$title= "View Book Info";
include('header.php');
require_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$bookinfo =  viewBookInfo($serialno);
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
            <!-- <li><a href="viewAllStudentsLibProfile.php">View Student Library Account</a></li> -->
            <li><a href="issueNewBook.php">Add Issue Book</a></li>
            <li><a href="issuedBookHistory.php">Issue Book History</a></li>
            <li><a href="searchBookInfo.php">searchBookInfo</a></li>
          </ul>
          </div>
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>

        <div id="notice">
    <table border="1">
    <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Categories</th>
            <th>Book Item No.</th>
            <th>Preview Book</th>
        </tr>
        <tr>
            <td><?php echo $bookinfo['isbn']; ?></td>
            <td><?php echo $bookinfo['title']; ?></td>
            <td><?php echo $bookinfo['author']; ?></td>
            <td><?php echo $bookinfo['edition']; ?></td>
            <td><?php echo $bookinfo['categories']; ?></td>
            <td><?php echo $bookinfo['bookcopy']; ?></td>
            <td><a href="<?php echo $bookinfo['bookfile']; ?>">Read the Book</a></td>
        </tr>
      </table>
          </div>
        </div>  

      <?php include('footer.php'); ?>   
 