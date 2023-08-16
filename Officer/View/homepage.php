<?php $title= "Home Page";
	include('header.php');
   ?>  

    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1><h3>Library</h3></td>
              <td align = "right">
                <a href="OfficerReg.php">Registration</a>
                <a href="OfficerLogin.php">Officer Login</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
 
      <td id="main content">
      <h2 align="center" ><?php echo $title; ?></h2><hr>
        <p>A library is fundamentally an organized set of resources, which include human services as well as the entire spectrum of media (e.g., text, video, hypermedia). Libraries have physical components such as space, equipment, and storage media; intellectual components such as collection policies that determine what materials will be included and organizational schemes that determine how the collection is accessed; and people who manage the physical and intellectual components and interact with users to solve information problems. </p>
        <img src="../Resources/libraryBook.jpg" alt="" width="100%" height="400px">
      </td>
    </tr>

    <?php include('footer.php'); ?>    