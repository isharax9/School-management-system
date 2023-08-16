<?php $title= "Add Fine";
include('header.php');
include_once('../Model/usersmodel.php');
$studentroll = $_GET['id'];
$_SESSION['studentroll'] = $studentroll;
$assignlatefine = viewIssuedInfo($studentroll);
?> 
<script>
        function addfine(){
            var Returndate = document.getElementById('returndate').value;
            var Returnstatus = document.getElementById('returnstatus').value;
            var Fine = document.getElementById('fine').value;
            var msg="";
            
            if(Returndate==""){
                msg+="please fill up Return Date";
                returndate.className="error";
            }
            if(Returnstatus==""){
                msg+="Select Return Status";
                returnstatus.className="error";
            }
            if(Fine==""){
                msg+="Add fine";
                fine.className="error";
            }
            if(msg==""){
                return true;
            }
            else{
                document.getElementById('msg1').innerHTML = "please fill up Return Date";
                document.getElementById('msg2').innerHTML = "Select Return Status";
                document.getElementById('msg3').innerHTML = "please Add fine";
                return false;

            }
        }

        function validation(){
            var Returndate = document.getElementById('returndate').value;
            var Returnstatus = document.getElementById('returnstatus').value;
            var Fine = document.getElementById('fine').value;
            if(Returndate!=""){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('returndate').className="success";
            }
            if(Returnstatus!=""){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('returnstatus').className="success";
            }
            if(Fine!=""){
                document.getElementById('msg3').innerHTML="";
                document.getElementById('fine').className="success";
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
        <h2 align="center"><a href="viewLibrarianProfile.php">My Profile</a></h2></h2>
          <h3 align="center"><a href="dashboard.php">Go to Dashboard</a></h3></br>
          <hr>
          <ul>
            <li><a href="addnewbook.php">Add New Book</a></li>
            <li><a href="allBooksInfo.php">All Book Information</a></li>
            <li><a href="viewStudentsList.php">View Students List</a></li>
            <li><a href="viewTeachersList.php">View Teachers List</a></li>
            <li><a href="noticeForm.php">New Book Arrival Notice</a></li>
            <li><a href="studentLibraryAcc.php">Create Student Library Account</a></li>
            <li><a href="">Block Library Account</a></li>
            <li><a href="issuebookhistory.php">Issue Book History</a></li>
          </ul>
        </td>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
        <form action="../Controller/updateFine.php" method="POST" onsubmit="return addfine()">
        <table align="center" border="1">
                    <tr>
                      <th>Student Id</th>
                      <th>Issued Date</th>
                      <th>Return Date</th>
                      <th>Return Status</th>
                      <th>Fine</th>
                    </tr>
                    <tr>

                 <tr>
                   <td><?php echo $assignlatefine['id']; ?></td>
                   <td><?php echo $assignlatefine['issuesdate']; ?></td>
                   <td> <input type="date" name="returndate" id="returndate" value="" onkeyup="validation()"><div id="msg1"></div></td>
                   <td><select name="returnstatus" id="returnstatus" onkeyup="validation()">
                            <option value="0" selected>0</option>
                            <option value="1">1</option><div id="msg2"></div></td>
                   <td><input type="number" name="fine" id="fine" value="" onkeyup="validation()"></select><div id="msg3"></div></td>
                   <td><input type="submit" name="addFine" value="Add Fine"></td>
                  </tr>
             </table>
        </form>
        </td>
      </tr>

      <?php include('footer.php'); ?>   