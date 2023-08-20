<!DOCTYPE html>
<html>

<head>

  <title>Student Login</title>
  <style media="screen">
    #error_messege {
      color: blue;
      font-weight: bold;
    }
  </style>
  <script src="../Script/LogCheck(script).js"></script>
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/adminlogin.css" />
</head>

<body>
  <tr>
    <table border="1" cellspacing="0" width="100%">
      <tr>
        <td>
          <table width="100%">
            <tr id="header">
              <td align="center"><img height="80px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align="center">
                <h1 class="text4">Online Student management system</h1>
              </td>
              <td align="left">
                <a href="../../Home/index.html"><button class="btn btn-outline-dark">Back</button></a>
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
                <form class="padded-form bg-primary-subtle" id="inform" action="../Controller/logCheck.php" onsubmit="return val()" method="post">
                  <fieldset>
                    <legend align="center" class="text3">Student Login</legend>
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
                        <td> <input type="text" id="id" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td> <input type="password" id="password" name="password" value=""></td>
                      </tr>
                    </table><br>
                    <input type="checkbox" name="" value=""> Remember Me <br>
                    <br>
                    <input type="submit" id="submit" name="submit" value="LOGIN">
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <td align="center">Developed by, Ishara Lakshitha Bandara &copy; 2023</td>
    </table>
  </tr>
</body>

</html>