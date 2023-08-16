<?php $title= "Add New Book";
	include('header.php');
   ?> 
<script>
        function addNewBook(){
            var Isbn = document.getElementById('isbn').value;
            var Booktitle = document.getElementById('booktitle').value;
            var Categories = document.getElementById('categories').value;
            var Author = document.getElementById('author').value;
            var Bookcopy = document.getElementById('bookcopy').value;
            var Edition = document.getElementById('edition').value;
            var Bookfile = document.getElementById('bookfile').value;
            var msg="";
            
            if(Isbn==""){
                msg+="please fill up ISBN";
                isbn.className="error";
            }
            if(Booktitle==""){
                msg+="enter booktitle";
                booktitle.className="error";
            }
            if(Categories==""){
                msg+="select categories";
                categories.className="error";
            }
            if(Author==""){
                msg+="write author name";
                author.className="error";
            }
            if(Bookcopy==""){
                msg+="enter bookcopy no";
                bookcopy.className="error";
            }
            if(Edition==""){
                msg+="please fill up edition field";
                edition.className="error";
            }
            if(Bookfile==""){
                msg+="upload bookfile";
                bookfile.className="error";
            }
            if(msg==""){
                return true;
            }
            else{
                document.getElementById('msg1').innerHTML = "please fill up the isbn";
                document.getElementById('msg2').innerHTML = "enter booktitle";
                document.getElementById('msg3').innerHTML = "select categories";
                document.getElementById('msg4').innerHTML = "write author name";
                document.getElementById('msg5').innerHTML = "enter bookcopy no";
                document.getElementById('msg6').innerHTML = "please upload bookfile";
                document.getElementById('msg7').innerHTML = "upload bookfile";
                return false;

            }
        }

        function validation(){
            var Isbn = document.getElementById('isbn').value;
            var Booktitle = document.getElementById('booktitle').value;
            var Categories = document.getElementById('categories').value;
            var Author = document.getElementById('author').value;
            var Bookcopy = document.getElementById('bookcopy').value;
            var Edition = document.getElementById('edition').value;
            var Bookfile = document.getElementById('bookfile').value;
            if(Isbn!="" && Isbn.length == 9){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('isbn').className="success";
            }
            if(Booktitle!="" && Booktitle.length >= 12){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('booktitle').className="success";
            }
            if(Categories!=""){
                document.getElementById('msg7').innerHTML="";
                document.getElementById('categories').className="success";
            }
            if(Author!=""){
                document.getElementById('msg3').innerHTML="";
                document.getElementById('author').className="success";
            }
            if(Bookcopy!=""){Author
                document.getElementById('msg4').innerHTML="";
                document.getElementById('bookcopy').className="success";
            }
            if(Edition!=""){
                document.getElementById('msg5').innerHTML="";
                document.getElementById('edition').className="success";
            }
            if(Bookfile!=""){
                document.getElementById('msg6').innerHTML="";
                document.getElementById('booktitle').className="success";
            }


        }
</script>

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
            <!-- <li><a href="addnewbook.php">Add New Book</a></li> -->
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
          <form action="../Controller/bookInfoCheck.php" method="post" onsubmit="return addNewBook()" enctype="multipart/form-data">
          <table align="center">
                    <tr>
                        <td>Enter ISBN :</td>
                        <td><input type="text" name="isbn" id="isbn" value="" onkeypress="validation()"><div id="msg1"></div></td>
                    </tr>
                    <tr>
                        <td>Enter Title :</td>
                        <td><input type="text" name="booktitle" id="booktitle" value="" onkeypress="validation()"><div id="msg2"></div></td>
                    </tr>
                    <tr>
                        <td>Select Categories :</td>
                        <td>
                         <select name="categories" id="categories"  onkeypress="validation()">
                            <option value="mystery">Mystery</option>
                            <option value="thriller">Thriller</option>
                            <option value="fantasy">Fantasy</option>
                         </select><div id="msg3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Author :</td>
                        <td><input type="text" name="author" id="author" value="" onkeypress="validation()"><div id="msg4"></div></td>
                    </tr>
                    <tr>
                        <td>Book Copy :</td>
                        <td><input type="text" name="bookcopy" id="bookcopy" value="" onkeypress="validation()"><div id="msg5"></div></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Edition :</td>
                        <td><input type="text" name="edition" id="edition" value="" onkeypress="validation()"><div id="msg6"></div></td>
                    </tr>
                    <tr>
                      <td>Upload Book :</td>
                      <td><input type="file" name="bookfile" id="bookfile" value="" onkeypress="validation()"><div id="msg7"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="lol"><input type="submit" name="addnewbook" value="Add New Book">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
             </table>
          </form>
        </td>
      </tr>
      <?php include('footer.php'); ?>   