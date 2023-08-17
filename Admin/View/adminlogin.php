<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../Style/adminlogin.css">
    <link rel="stylesheet" href="../Home/css/bootstrap.css" />
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

    <script src="../Script/adminloginVal.js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>Online Student management system</h1></td>
              <td align = "right">
                <a href="../../Home/index.html"><Button class="btn btn-danger">Back</Button></a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <div id="formtable" class="">


          <table  align="center" >
            <tr>
              <td>
                <form class="" id="inform" action="../Controller/logCheck.php" onsubmit="return validation()" method="post">
                  <fieldset>
                    <legend>LOGIN</legend>
                    <table>
                      <tr>
                        <td colspan="2">
                          <center>
                          <div id="error_messege">
                          </div>
                        </center>
                      </tr>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" id="password" name="password" value=""></td>
                      </tr>
                    </table>
                    <input type="checkbox" name="" value=""> Remember Me <br>
                    <br>
                    <input type="submit" id="submit" name="submit" value="LOGIN">
                    <a href="ForgotPassword.php">FORGOT PASSWORD?</a>
                    <br>
                    <a href="regester.php">SIGN UP</a>
                  </fieldset>
                </form>
            </td>

          </tr>
          </table>
          </div>
        </td>
      </tr>

      <tr>
        <td align="center" >Copyright Ⓒ 2021</td>
      </tr>

    </table>

  </body>
</html>
