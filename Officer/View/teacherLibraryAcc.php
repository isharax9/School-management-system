<?php $title= "Create Teachers Library Account";
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
          <h2 align="center">Login As </h2>
          <h3 align="center"></h3>
          <h3 align="center"><a href="dashboard.php">Go to Dashboard</a></h3></br>
          <hr>
          <ul>
            <li><a href="studentLibraryAcc.php">Create Student Library Account</a></li>
            <li><a href="teacherLibraryAcc.php">Create Teachers Library Account</a></li>
            <li><a href="allBookInfo.php">All Book Information</a></li>
            <li><a href="addnewbook.php">Add New Book</a></li>  
            <li><a href="">Delete Book</a></li>
            <li><a href="">Update Book</a></li>
            <li><a href="">View Students List</a></li>
            <li><a href="">View Teachers List</a></li>
            <li><a href="">Block Library Account</a></li>
            <li><a href="">Delete Library Account</a></li>
            <li><a href="">New Book Arrival Notice</a></li>
            <li><a href="">Book Borrow History</a></li>
            <li><a href="">Issue Book History</a></li>
            <li><a href="">Search Book Information</a></li>
            <li><a href="">Issue Book History</a></li>
          </ul>
        </td>
        <td id="main content">
            <form action="../Controller/studentAccCheck.php" method="POST"><h2 align="center" ><?php echo $title; ?></h2><hr>
                  <table align="center">
                      <tr>
                        <td>Your Email Address</td>
                        <td>: <input type="email" name="mail" value="" ></td>
                      </tr>
                      <tr>
                        <td>Your Name</td>
                        <td>: <input type="text" name="name" placeholder="Academic Name"></td>
                      </tr>
                      <tr>
                        <td>Your Id</td>
                        <td>: <input type="text" name="sid" value=""></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>
                          : <input type="radio" name="gender" value="male">Male
                          <input type="radio" name="gender" value="female">Female
                        </td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>: <input type="date" name="dob" value=""></td>
                      </tr>
                      <tr>
                        <td>Present Address</td>
                        <td>: <input type="text" name="address" value=""></td>
                      </tr>
                      <tr>
                        <tr>
                            <td>Choose a Password</td>
                            <td>: <input type="password" name="password" value=""></td>
                          </tr>
                          <tr>
                            <td>Confirm Password</td>
                            <td>: <input type="password" name="cpassword" value=""></td>
                          </tr>
                    <tr>
                      <td></td>
                      <td><input type="submit" name="submit" value="Create Account"><input type="reset" name="reset" value="Reset"></td>
                    </tr>
                  </table>
                </fieldset>
              </form>
          
        </td>
      </tr>

      <?php include('footer.php'); ?>  