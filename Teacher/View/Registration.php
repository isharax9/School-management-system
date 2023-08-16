<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <style media="screen">
      #error_messege{
        color: blue;
        font-weight: bold;
      }
    </style>
    <script src="../Script/RegCheck(script).js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="90%" >
      <tr>
        <td>
            <table width="100%">
                <tr>
                  <td><img height="40px" weight="40px" src="../Resources/school_logo.png" alt=""></td>
                  <td align = "right">
                      <a href="HomePage.php">Home</a>|
                      <a href="LoginPage.php">Login</a>|
                      <a href="Registration.php">Registration</a>
                  </td>
                </tr>
            </table>
          </td>
      </tr>
      <tr>
        <td height="150px" weight="150px" colspan="2">
            <!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
         <table align="center">
             <tr>
                <td></td>
                <td>
                    <form method="post" id="RegistrationForm" action="../Controller/RegCheck.php" onsubmit="return Registration()"> 
                        <fieldset width="5px">
                            <legend>REGISTRATION</legend>
                          <table width="100.7%" height="100px" align="center">
 
                              <tr>
                                  <td width="30%" height="30px">Name</td>
                                  <td width="60%" height="30px">:<input type="text" id= "uname" name="uname" value=""></td>
                              </tr>
                             
                              <tr>
                                <td width="30%" height="30px">Email</td>
                                <td width="60%" height="30px">:<input type="email" id= "email" name="email" value=""></td>
                            </tr>

                             <tr>
                                  <td width="30%" height="30px">Mobile No.</td>
                                  <td width="60%" height="30px">:<input type="text" id= "mobile" name="mobile" value=""></td>
                              </tr>

                              <tr>
                                  <td width="30%" height="30px">ID</td>
                                  <td width="60%" height="30px">:<input type="text" id= "id" name="ID" value=""></td>
                              </tr>

                              <tr>
                                <td width="30%" height="30px">Password</td>
                                <td width="60%" height="30px">:<input type="password" id= "password" name="password"></td>
                             </tr>
                    
                            <tr>
                                <td width="30%" height="30px">Confirm Password</td>
                                <td width="60%" height="30px">:<input type="password" id= "repass" name="confirm"></td>
                            </tr>
                           
                              <tr>
                                <td colspan="2">
                                <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" id= "gender" name="gender" value="male">Male
                                <input type="radio" id= "gender" name="gender" value="female">Female
                                <input type="radio" id= "gender" name="gender" value="other">Other
                                </fieldset>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                <fieldset>
                                <legend>Date of Birth</legend>
                                <input type="date" id= "dob" name="dob" value="">
                                </fieldset>
                                </td>
                            </tr>
                             
                            <tr>
                                <td height="30px" align="center" colspan="3"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
                            </tr>

                            <tr>
                            <td colspan="2">
                             <center>
                             <div id="error_messege">
                             </div>
                             </center>
                             </td>
                             </tr> 

                          </table>
                        </fieldset>
                        </form>
                </td>
                <td></td>
             </tr>
         </table>
    </body>
</html>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>