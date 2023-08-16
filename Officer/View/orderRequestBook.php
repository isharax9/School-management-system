<?php $title= "Request of Book";
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
          </div>
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/searchBookCheck.php" method="post">
          <table align="center">
                    
                    <tr>
                        <td>ISBN Number :</td>
                        <td><input type="text" name="isbnno" value=""></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><input type="submit" name="searchbook" value="Get Book Info"></td>
                    </tr>
             </table>
          </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   