<?php
session_start();
if (!isset($_COOKIE['flag'])) {
  header('location: adminlogin.php');
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>
    <?= $title ?>
  </title>
  <link rel="stylesheet" href="../Style/sidebar.css">
  <style media="screen">
    #error_messege {
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
  <script src="<?= $js ?>"></script>
  <link rel="stylesheet" href="../Style/bootstrap.css" />
  <link rel="stylesheet" href="../Style/adminlogin.css" />

</head>

<body>
  <table border="1" cellspacing="0" width="100%">
    <tr>
      <td>
        <table width="100%">
          <tr id="header">
            <td align="center"><a href="dashboard.php"><img height="80px" weight="50px" src="../Resources/logo.png"
                  alt=""></a></td>
            <td align="center">
              <h1 class="text4">Online Student management system</h1>
            </td>
            <td align="center">
              <a href="dashboard.php"><button class="btn btn-outline-info">Back</button></a>
              <a href="../Controller/logout.php"><button class="btn btn-outline-danger">Logout</button></a>

            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td>
        <table width="100%" cellspacing="0" border="0" class="bg-light-subtle">
          <tr id="navigation">
            <td width="250px">
              <center>
                <h3>Login As</h3>
                <h2>
                  <a href="viewProfile.php">
                    <?php echo $_COOKIE['name']; ?>
                  </a>
                </h2>
                <p class="text3">(Administrator)</p>
              </center>
              <hr>