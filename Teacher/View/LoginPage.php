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
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/adminlogin.css" />
</head>

<body>
  <table border="1" cellspacing="0" width="100%">
    <tr>
      <td>
        <table width="100%">
          <tr id="header">
            <td align="center"><img height="80px" weight="50px" src="../Resources/logo.png" </td>
            <td align="center">
              <h1 class="text4">Online Student management system</h1>
            </td>
            <td align="center">
              <a href="../../Home/index.html"><button class="btn btn-outline-dark">Back</button></a>
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
                <form class="padded-form bg-info-subtle" method="post" id="LoginForm" action="../Controller/LogCheck.php"
                  onsubmit="return LoginValid()">
                  <fieldset width="5px">
                    <legend align="center" class="text3">Teacher Login</legend><br>
                    <form class="" action="" method="post">
                      <table>
                        <tr>
                          <td>ID</td>
                          <td><input type="text" id="id" name="ID" value=""></td>
                        </tr>

                        <tr>
                          <td>Password</td>
                          <td><input type="password" id="password" name="password" value=""></td>
                        </tr>
                      </table><br>
                      <input type="checkbox" name="" value=""> Remember Me <br>
                    <br>
                    <input type="submit" id="submit" name="submit" value="LOGIN">

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
        <br>
      </td>
      
    </tr>
    
    <?php include("TeacherFooter.php") ?>
    
  </table>
  <script src="../Script/LogCheck(script).js"></script>
</body>

</html>