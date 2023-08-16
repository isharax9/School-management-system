<?php 
$title= "View Student List";
include('header.php');
include_once('../Model/usersmodel.php');
$studentsinfo = getAllstudentsInfo();
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
            <!-- <li><a href="viewStudentsList.php">View Students List</a></li> -->
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
                    
        <script type="text/javascript" src="../js/searchStudentlist.js"></script>

<input type="text" name="name" id="name" onkeyup="ajax()" />
	<input type="button" name="" value="Search">
    <br>
    <div id="viewstudentlist" class="">
    <div id="notice" >
    <table border="1">
    <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Class</th>
            <th>Section</th>
            <th>Roll</th>
            <th>Present Address</th>
        </tr>
        <?php  for($i=0; $i < count($studentsinfo); $i++){ ?>
         <tr>
             <td><?php echo $studentsinfo[$i]['name'] ?></td>
             <td><?php echo $studentsinfo[$i]['email'] ?></td>
             <td><?php echo $studentsinfo[$i]['mobile'] ?></td>
             <td><?php echo $studentsinfo[$i]['gender'] ?></td>
             <td><?php echo $studentsinfo[$i]['dob'] ?></td>
             <td><?php echo $studentsinfo[$i]['class'] ?></td>
             <td><?php echo $studentsinfo[$i]['section'] ?></td>
             <td><?php echo $studentsinfo[$i]['id'] ?></td>
             <td><?php echo $studentsinfo[$i]['p_address'] ?></td>
         </tr><?php  } ?></div>
             </table>
             </div>
        </div>    

      <?php include('footer.php'); ?>   
 