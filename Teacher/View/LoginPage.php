<!DOCTYPE html>
<html>

<head>

  <title>Teacher Login</title>
  <style media="screen">
    #error_messege {
      color: blue;
      font-weight: bold;
    }
  </style>
  <script src="../Script/LogCheck(script).js"></script>
  <link rel="stylesheet" href="../css/bootstrap.css " />
</head>

<body>
  <table border="1" cellspacing="0" width="100%">
    <tr>
      <td>
        <table width="100%" class="table-bordered">
          <tr id="header">
            <td><a href="dashboard.php"><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></a></td>
            <td align="center">
              <h1>Online Student management system</h1>
            </td>
            <td align="right">

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
          <table align="center" class=" table-primary" >
            <tr>
              <td></td>
              <td>
                <form method="post" id="LoginForm" action="../Controller/LogCheck.php" onsubmit="return LoginValid()">
                  <fieldset width="5px">
                    <legend>Teacher Login</legend>
                    <form class="" action="" method="post">
                      <table>
                        <tr>
                          <td>ID:</td>
                          <td><input type="text" id="id" name="ID" value=""></td>
                        </tr>
                        <br>
                        <tr>
                          <td>Password:</td>
                          <td><input type="password" id="password" name="password" value=""></td>
                        </tr>
                      </table>
                      <hr>
                      <div align="center"><input type="submit" name="submit" value="Submit"><br><br><a href="Registration.php"><input type="button" name="Sign Up" value="Sign Up"></a></div>
                      <center>
                        <div id="error_messege">
                        </div>
                      </center>
                    </form>
                  </fieldset>
                </form>
              </td>
              
            </tr>
          </table>
        </body>

        </html>
      </td>
    </tr>
    <?php include("TeacherFooter.php") ?>
  </table>
  <script src="../Script/LogCheck(script).js"></script>
</body>

</html>