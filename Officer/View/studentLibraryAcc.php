<?php $title= "Create Student Library Account";
	include('header.php');
   ?>
    <script>
  function studentLibAcc(){
    var Sturoll = document.getElementById('sturoll').value;
    var msg="";
    if(Sturoll==""){
                msg+="enter your roll";
                sturoll.className="error";
            }
      if(msg==""){
          return true;
        }else{
              document.getElementById('msg1').innerHTML = "enter your roll";
              return false;
            }
  }
  function validation(){
            var Sturoll = document.getElementById('sturoll').value;
            if(Sturoll!="" && Sturoll.length > 0){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('sturoll').className="success";
            }
}
  </script>  
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
            <form action="../Controller/studentAccCheck.php" method="POST" onsubmit="return studentLibAcc()">
                <table align="center" >
                     <tr>
                        <td>Enter Student Id</td>
                        <td>: <input type="text" name="sturoll" id="sturoll" onkeypress="validation()"><div id="msg1"></div></td>
                      </tr>
                      <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                      </tr>
                       
                  </table>
                </fieldset>
              </form>
          
        </td>
      </tr>

      <?php include('footer.php'); ?>  