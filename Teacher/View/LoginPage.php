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
    <script src="../Script/LogCheck(script).js"></script>
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
                      <a href="../../Home/index.html">Back</a>
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
                    <form method="post" id="LoginForm" action="../Controller/LogCheck.php" onsubmit="return LoginValid()"> 
                        <fieldset width="5px">
                            <legend>LOGIN</legend>
        <form class="" action="" method="post">
           <table>
           <tr>
            <td>ID:</td> 
            <td><input type="text" id="id" name="ID" value=""></td>
           </tr>
           <tr>
            <td>Password:</td> 
            <td><input type="password" id="password" name="password" value=""></td>
           </tr>
           </table>
            <hr>
            <div align="center"><input type="submit" name="submit" value="Submit"> <a href="Registration.php"><input type="button" name="Sign Up" value="Sign Up"></a></div>
            <center>
              <div id="error_messege">
              </div>
            </center>
        </form>
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