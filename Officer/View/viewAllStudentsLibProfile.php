<?php 
$title= "View Students Officer Profile";
include('header.php');
include_once('../Model/usersmodel.php');
$viewAllStudentsLibProfile = ViewAllStudentsLibInfo();
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
                    
        <script type="text/javascript" src="../js/searchStudentLibProfile.js"></script>
<input type="text" name="roll" id="roll" onkeypress="ajax()" />
	<input type="button" name="" value="Search">
    <br>
    <div id="myh1" class="">
    <div id="notice">
    <table border="1">
    <tr>
            <th>Serial No.</th>
            <th>Student Id</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php  for($i=0; $i < count($viewAllStudentsLibProfile); $i++){ ?>
         <tr>
             <td><?php echo $viewAllStudentsLibProfile[$i]['serialno'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['id'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['name'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['mail'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['gender'] ?></td>
             <td>
                  <a href="editstudentlibprofile.php?id=<?php echo $viewAllStudentsLibProfile[$i]['id']; ?>">UPDATE</a> |
                  <a href="deletestudentlibprofile.php?id=<?php echo $viewAllStudentsLibProfile[$i]['id']; ?>">DELETE</a> 
                  
             </td>
         </tr>
         <?php  } ?></div>
             </table>
             </div>
             </div>

      <?php include('footer.php'); ?>   
 