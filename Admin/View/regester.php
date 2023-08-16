<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Regester</title>
    <link rel="stylesheet" href="../Style/regester.css">
    <style media="screen">
      #error_messege{
        color: White;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 0px;
        background: #de0404;
        text-align: center;
        font-size: 18px;
        transition: all 0.5s ease;
      }
    </style>
    <script src="../Script/regester.js"></script>

  </head>
  <body>
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
          <table align="center" >
            <tr>
              <td>
                <form class="" id="myform" action="../Controller/regCheck.php" onsubmit="return validation()" method="post">
                  <fieldset>
                    <legend>REGESTER</legend>
                    <table>
                      <tr>
                        <td colspan="2">
                          <center>
                          <div id="error_messege">
                          </div>
                        </center>
                        </td>
                      </tr>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td>: <input type="text" id="name"name="name" placeholder="Enter Full Name"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>: <input type="email" id="email" name="email" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" id="password" name="password" value=""></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" id="repass" name="repass" value=""></td>
                      </tr>
                    </table>
                    <hr>
                    <center>
                      <input type="submit" id="submit" name="signup" value="SIGN UP">
                      <input type="reset" id="reset" name="reset" value="Reset">
                      <a href="adminlogin.php">SIGN IN</a>
                  </center>

                  </fieldset>
                </form>
            </td>

          </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td align="center" >Copyright Ⓒ 2021</td>
      </tr>

    </table>
  </body>
</html>
