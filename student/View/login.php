<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <style media="screen">
    #error_messege {
      color: green;
      font-weight: bold;
    }
  </style>
  <script src="../Script/loginval.js"></script>
</head>

<body>
  <table border="1" cellspacing="0" width="100%">
    <tr>
      <td>
        <table width="100%">
          <tr>
            <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
            <td align="center">
              <h1>Online Student management system</h1>
            </td>
            <td align="right">
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
              <form class="" action="../Controller/logCheck.php" onsubmit="return val()" method="post">
                <fieldset>
                  <legend>LOGIN</legend>
                  <table>
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
                  <input type="submit" name="submit" value="LOGIN">
                  <a href="registration.php">Sign Up</a>
                </fieldset>
              </form>
            </td>
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
      </td>
    </tr>
    <tr>
    <td align="center">Developed by, Ishara Lakshitha Bandara &copy; 2023</td>
    </tr>
  </table>
</body>

</html>