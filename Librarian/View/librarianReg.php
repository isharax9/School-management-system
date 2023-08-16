<!DOCTYPE html>
<html>
<head>
	<title>Librarian Registration Page</title>
	<style>
        .error{
            border: 2px solid red;
        }
        .success{
            border: 2px solid green;
        }
    </style>
</head>
<body>
<script>
function Librarianregistration(){
  var Mail = document.getElementById('mail').value;
  var Name = document.getElementById('nam').value;
  var Librarianid = document.getElementById('librarianid').value;
  var Mobilen = document.getElementById('mobilen').value;
  var Dob = document.getElementById('dob').value;
  var Address = document.getElementById('address').value;
  var Password = document.getElementById('password').value;
  var Cpassword = document.getElementById('cpassword').value;
  var msg=""
  if(Mail==""){
       msg+="enter mail address";
       mail.className="error";
  }
  if(Name==""){
       msg+="enter name";
       nam.className="error";
  }
  if(Librarianid==""){
       msg+="enter Librarianid";
       librarianid.className="error";
  }
  if(Mobilen==""){
       msg+="enter mobile no";
       mobilen.className="error";
  }
  if(Dob==""){
       msg+="enter date of birth";
       dob.className="error";
  }
  if(Address==""){
       msg+="write your address";
       address.className="error";
  }
  if(Password==""){
       msg+="enter password";
       password.className="error";
  }
  if(Cpassword==""){
       msg+="Retype Password";
       cpassword.className="error";
  }
  
  if(msg==""){
                return true;
            }
  else{
                document.getElementById('msg1').innerHTML = "enter mail address";
                document.getElementById('msg2').innerHTML = "enter name";
                document.getElementById('msg3').innerHTML = "enter Librarianid";
                document.getElementById('msg4').innerHTML = "enter mobile no";
                document.getElementById('msg5').innerHTML = "enter date of birth";
                document.getElementById('msg6').innerHTML = "write your address";
                document.getElementById('msg7').innerHTML = "enter password";
                document.getElementById('msg8').innerHTML = "Retype Password";
                return false;

  }
}

function Regvalidation(){
  var Mail = document.getElementById('mail').value;
  var Name = document.getElementById('nam').value;
  var Librarianid = document.getElementById('librarianid').value;
  var Mobilen = document.getElementById('mobilen').value;
  var Dob = document.getElementById('dob').value;
  var Address = document.getElementById('address').value;
  var Password = document.getElementById('password').value;
  var Cpassword = document.getElementById('cpassword').value;
  if(Mail!=""){
    var str = document.getElementById('mail').value;
    var n = str.includes("@gmail");
    if(n == true){
      document.getElementById('msg1').innerHTML="";
      document.getElementById('mail').className="success";
      
     }
    }
  if(Name!=""){
      document.getElementById('msg2').innerHTML="";
      document.getElementById('nam').className="success";
    }
    if(Librarianid!="" && Librarianid.length == 3){
      document.getElementById('msg3').innerHTML="";
      document.getElementById('librarianid').className="success";
    }
    if(Mobilen!="" && Mobilen.length == 10){
      document.getElementById('msg4').innerHTML="";
      document.getElementById('mobilen').className="success";
    }
    if(Dob!=""){
      document.getElementById('msg5').innerHTML="";
      document.getElementById('dob').className="success";
    }
  if(Address!=""){
      document.getElementById('msg6').innerHTML="";
      document.getElementById('address').className="success";
    }
    if(Password!="" && Password.length == 7){
      document.getElementById('msg7').innerHTML="";
      document.getElementById('password').className="success";
    }
   if(Cpassword!="" && Cpassword.length == 7){
      document.getElementById('msg8').innerHTML="";
      document.getElementById('cpassword').className="success";
    }
    if(Password == Cpassword){
      document.getElementById('msg8').innerHTML="";
      document.getElementById('cpassword').className="success";
    }
}
</script>
<table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="homepage.php">Homepage</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
        <form action="../Controller/librarianRegCheck.php"  method="POST" onsubmit="return Librarianregistration()">
                <table align="center">
                  <tr>
                    <td>Email Address</td>
                    <td>: <input type="email" name="mail" id="mail" value=""  onkeypress="Regvalidation()"><div id="msg1"></div></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" id="nam" value=""  onkeypress="Regvalidation()"><div id="msg2"></div></td>
                  </tr>
                  <tr>
                    <td>Librarian Id</td>
                    <td>: <input type="text" name="librarianid" id="librarianid" value=""  onkeypress="Regvalidation()"><div id="msg3"></div></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>
                      : <input type="radio" name="gender" value="male" checked>Male
                      <input type="radio" name="gender" value="female">Female
                    </td>
                  </tr>
                  <tr>
                    <td>Mobile Number</td>
                    <td>: <input type="text" name="mobileno" id="mobilen" value="01"  onkeypress="Regvalidation()"><div id="msg4"></div></td>
                  </tr
                  <tr>
                    <td>Date of Birth</td>
                    <td>: <input type="date" name="dob" id="dob" value=""  onkeypress="Regvalidation()"><div id="msg5"></div></td>
                  </tr>
                  <!-- <tr>
                    <td>Present Address</td>
                    <td>: <input type="text" name="address" id="address" value=""  onkeypress="Regvalidation()"><div id="msg6"></div></td>
                  </tr> -->
                  <tr>
                    <tr>
                        <td>Choose a Password</td>
                        <td>: <input type="password" name="password" id="password" value=""  onkeypress="Regvalidation()"><div id="msg7"></div></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" name="cpassword" id="cpassword" value=""  onkeypress="Regvalidation()"><div id="msg8"></div></td>
                      </tr>
                      <!-- <tr>
                    <td colspan="2"><input type="checkbox" name="policy" value="1"><b>Yes</b>,I'll maintain privacy & policy.</td>
                  </tr> -->
                <tr>
                    <td><input type="submit" name="register" value="Registration"></td>
                    <td>Already have Account? <a href="librarianLogin.php">Login </a></td>
                </tr>
                </table>
          </form>
        </td>
      </tr>
      
      <?php include('footer.php'); ?>   