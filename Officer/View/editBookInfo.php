<?php $title= "Edit Book Info";
include('header.php');
include_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$updateBookInfo = viewBookInfo($serialno);
$_SESSION['serialno'] = $serialno;
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
            <li><a href="issuedBookHistory.php">Issue Book History</a></li>
            <li><a href="searchBookInfo.php">searchBookInfo</a></li>
          </ul>
          </div>
        </td>
        
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/updateBookInfoCheck.php" method="POST">
          <table align="center">
                    <tr>
                        <td>Enter ISBN :</td>
                        <td><input type="text" name="isbn" disabled value="<?php echo $updateBookInfo['isbn']; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Enter Title :</td>
                        <td><input type="text" name="booktitle" value="<?php echo $updateBookInfo['title']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Select Categories :</td>
                        <td>
                         <select name="categories" id="categories">
                            <option value="mystery">Mystery</option>
                            <option value="thriller">Thriller</option>
                            <option value="fantasy">Fantasy</option>
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Author :</td>
                        <td><input type="text" name="author" value="<?php echo $updateBookInfo['author']; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Edition :</td>
                        <td><input type="text" name="edition" value="<?php echo $updateBookInfo['edition']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Book Copy :</td>
                        <td><input type="text" name="bookcopy" value="<?php echo $updateBookInfo['bookcopy']; ?>"></td>
                    </tr>
                    <!-- <tr>
                      <td>Upload Book :</td>
                      <td><input type="file" name="bookfile" value="<?php echo $updateBookInfo['bookfile']; ?>"></td>
                    </tr> -->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="updatebookinfo" value="Update Book Info">
                        </td>
                    </tr>
             </table>
            </fieldset>
          </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   