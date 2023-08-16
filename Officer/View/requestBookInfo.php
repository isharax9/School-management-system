<?php $title= "Request of Book";
	include('header.php');
  include_once('../Model/usersmodel.php');
  $requestBookInfo = ViewRequestBook();
   ?> 

    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>Online Student management system</h1></td>
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
            <li><a href="issuedBookHistory.php">Issue Book History</a>
            <li><a href="orderRequestBook.php">Order Request of Book</a></li>
            <!-- <li><a href="searchBookInfo.php">searchBookInfo</a></li> -->
          </ul>
          <div id="sidebar">
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/searchBookCheck.php" method="post">
          <div id="notice">
          <table align="center" border="1">
                    <tr>
                      <th>Serial No</th>
                      <th>ISBN</th>
                      <th>Book Title</th>
                      <th>Author</th>
                      <th>Edition</th>
                      <th>Student ID</th>
                      <th>Request Date</th>
                      <th>Action</th>
                    </tr>
                    <tr>

                  <?php  for($i=0; $i < count($requestBookInfo); $i++){ ?>
                 <tr>
                   <td><?php echo $requestBookInfo[$i]['sl'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['isbn'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['title'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['author'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['edition'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['id'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['requestdate'] ?></td>
                   <td><a href="issueNewBook.php?id=<?php echo $requestBookInfo[$i]['id']; ?>">Add Issue Book</a></td>
                   
                  </tr><?php  } ?>
             </table>
              </div> 
          </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   