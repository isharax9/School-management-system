<?php
	session_start();
	if(!isset($_COOKIE['flag']))
	{
    header('location: adminlogin.php');
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
		<link rel="stylesheet" href="../Style/sidebar.css">
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
		<script src="<?=$js?>"></script>

  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr id="header">
              <td><a href="dashboard.php"><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></a></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="dashboard.php">Back</a> |
                <a href="../Controller/logout.php"><span class="tab">Logout</a>

              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="1">
            <tr id="navigation">
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>
										<a href="viewProfile.php"><?php echo $_COOKIE['name'];?></a>
									</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
