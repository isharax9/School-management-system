<?php $title= "Dashboard";
include_once('../Model/usersmodel.php');
$allnotices = viewAllNotice();
	include('header.php');
   ?>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>Online Student management system</h1></td>
              <td align = "right" >
                <a id="logout" href="../Controller/logout.php">Logout</a>
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
            <!-- <li><a href="issueNewBook.php">Add Issue Book</a></li> -->
            <li><a href="issuedBookHistory.php">Issue Book History</a></li>
            <li><a href="searchBookInfo.php">searchBookInfo</a></li>
            <li><a href="requestBookInfo.php">Request of Book</a></li>
          </ul>
          </div>
        </td>
        <td id="pagetitle"><h2><?php echo $title; ?></h2><hr>
        <div id="maincontent">
          <h1>Welcome to Library</h1>
          <p>A library is fundamentally an organized set of resources, which include human services as well as the entire spectrum of media (e.g., text, video, hypermedia). Libraries have physical components such as space, equipment, and storage media; intellectual components such as collection policies that determine what materials will be included and organizational schemes that determine how the collection is accessed; and people who manage the physical and intellectual components and interact with users to solve information problems. </p>
          </div>
          <div id="notice">
          <table border="1">
        <tr>
            <th>Serial No.</th>
            <th>Notice Title</th>
            <th>Notice Details</th>
            <th>Time</th>
        </tr>
        <?php  for($i=0; $i < count($allnotices); $i++){ ?>
         <tr>
             <td><?php echo $allnotices[$i]['noticeid'] ?></td>
             <td><?php echo $allnotices[$i]['noticetitle'] ?></td>
             <td><?php echo $allnotices[$i]['noticedetails'] ?></td>
             <td><?php echo $allnotices[$i]['time'] ?></td>
         </tr><?php  } ?>
    </table>
    </div>
        </td>
      </tr>

<?php include('footer.php'); ?>   

