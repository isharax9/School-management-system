<?php $title= "Add New Book Arrival Notice";
	include('header.php');
   ?> 
<script>
function bookarrivalnotice(){
            var Noticetitle = document.getElementById('noticetitle').value;
            var Noticedetails = document.getElementById('noticedetails').value;
            var msg="";
            
            if(Noticetitle==""){
                msg+="please write notice title";
                noticetitle.className="error";
            }
            if(Noticedetails==""){
                msg+="enter noticedetails";
                noticedetails.className="error";
            }
            if(msg==""){
                return true;
            }
            else{
                document.getElementById('msg1').innerHTML = "please write notice title";
                document.getElementById('msg2').innerHTML = "enter noticedetails";
                return false;

            }
}

            function validation(){
            var Noticetitle = document.getElementById('noticetitle').value;
            var Noticedetails = document.getElementById('noticedetails').value;
            if(Noticetitle!="" && Noticetitle.length >= 12){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('noticetitle').className="success";
            }
            if(Noticedetails!="" && Noticedetails.length >= 30){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('noticedetails').className="success";
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
            <!-- <li><a href="noticeForm.php">New Book Arrival Notice</a></li> -->
            <li><a href="studentLibraryAcc.php">Create Student Library Account</a></li>
            <li><a href="viewAllStudentsLibProfile.php">View Student Library Account</a></li>
            <li><a href="issueNewBook.php">Add Issue Book</a></li>
            <li><a href="issuedBookHistory.php">Issue Book History</a></li>
            <li><a href="searchBookInfo.php">searchBookInfo</a></li>
          </ul>
          </div>
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/noticeCheck.php" method="POST"  onsubmit="return bookarrivalnotice()">
          <table align="center">
                    <tr>
                        <td>Enter Notice Title :</td>
                        <td><input type="text" name="noticetitle" id="noticetitle" value=""  onkeypress="validation()"><div id="msg1"></div></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Notice Details :</td>
                        <td><textarea rows="4" cols="50" name="noticedetails" id="noticedetails"  onkeypress="validation()"></textarea><div id="msg2"></div></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" name="uploadnotice" value="Upload Notice"></td>
                    </tr>
             </table>
            </fieldset>
          </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   