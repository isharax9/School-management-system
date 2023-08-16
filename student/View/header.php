<?php
session_start();
if(!isset($_COOKIE['flag']))
{
header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$title?><</title>
    <style media="screen">
    #error_messege {
      color: green;
      font-weight: bold;
    }
  </style>
  <script src="<?=$javascript?>"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="../Controller/logOut.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
