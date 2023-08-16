<?php $title= "issued Book History.";
	include('header.php');
  include_once('../Model/usersmodel.php');
  $allIssuedBookDetails = viewIssuedBookDetails();

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
            <!-- <li><a href="issuedBookHistory.php">Issue Book History</a></li> -->
            <li><a href="searchBookInfo.php">searchBookInfo</a></li>
          </ul>
          </div>
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/" method="post">
          <div id="notice" >
          <table align="center" border="1">
                    <tr>
                      <th>Serial No</th>
                      <th>ISBN</th>
                      <th>Book Title</th>
                      <th>Student Id</th>
                      <th>Issued Date</th>
                      <th>Return Date</th>
                      <th>Return Status</th>
                      <th>Fine</th>
                      <th>Action</th>
                    </tr>
                    <tr>

                  <?php  for($i=0; $i < count($allIssuedBookDetails); $i++){ ?>
                 <tr>
                   <td><?php echo $allIssuedBookDetails[$i]['serialno'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['isbn'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['title'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['id'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['issuesdate'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['returndate'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['returnstatus'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['fine'] ?></td>
                   <td><a href="addFine.php?id=<?php echo $allIssuedBookDetails[$i]['id']?> ?>">Edit</a></td>
                  </tr><?php  } ?>
             </table>
              </div>
          </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   

      

      