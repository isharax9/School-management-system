<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
  
	<style>
        .error{
            border: 2px solid red;
        }
        .success{
            border: 2px solid green;
        }
        
#loginform table {
  background-color: #fff;
  padding: 50px 10px;
}

#loginform table .Officerid td, #loginform table .Officerpass td{
  font-size: 20px;

}
#loginform table input{
  font-size: 20px;

}
#loginform #loginbttn{
  padding: 12px 30px;
  background-color: grey;

}
#loginform #loginbttn:hover{
  background-color: lightblue;
  border-radius: 8px;

}
#loginform a{
  font-size:20px;
  margin-left: 140px;
}
#loginform a:hover{
  color: green;
}

</style>
    
</head>
<body> 
<script>
  function Officerlogin(){
    var Officerid = document.getElementById('Officerid').value;
    var Password = document.getElementById('password').value;
    var msg="";
    if(Officerid==""){
                msg+="please enter Officer ID";
                Officerid.className="error";
            }
            if(Password==""){
                msg+="please Enter Password";
                password.className="error";
            }
            if(msg==""){
                return true;
            }
            else{
                document.getElementById('msg1').innerHTML = "please enter Officer ID";
                document.getElementById('msg2').innerHTML = "please Enter Password";
                return false;
            }
  }
  
  function validation(){
  var Officerid = document.getElementById('Officerid').value;
  var Password = document.getElementById('password').value;
  if(Officerid!="" && Officerid.length == 3){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('Officerid').className="success";
            }
            if(Password!="" && Password.length == 7){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('password').className="success";
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
              <a href="../../Home/index.html">Back</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table align="center">
            <tr>
              <td>
                <div id="loginform">
                <form class="" action="../Controller/OfficerLogCheck.php" method="POST" onsubmit="return Officerlogin()">
                  <fieldset>
                    <legend>LOGIN</legend>
                    <table>
                      <tr class="Officerid">
                        <td>Officer ID</td>
                        <td>: <input type="text" name="Officerid" id="Officerid" value=""  onkeypress="validation()"><div id="msg1"></div></td>
                      </tr>
                      <tr class="Officerpass">
                        <td>Password</td>
                        <td>: <input type="password" name="password" id="password" value=""  onkeypress="validation()"><div id="msg2"></div></td>
                      </tr>
                    </table>
                    <!-- <input type="checkbox" name="remember" value=""> Remember Me <br> -->
                    <br>
                    <input type="submit" name="login" value="LOGIN" id="loginbttn">
                    <a href="OfficerReg.php">Registration</a>
                    <div id="login"></div>
                  </fieldset>
                </form>
                </div>
            </td>
          </tr>
          </table>
        </td>
      </tr>
<?php include('footer.php'); ?> 
