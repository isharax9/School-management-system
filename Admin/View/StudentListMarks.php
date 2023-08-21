<?php

require_once('../Model/DatabaseConnection.php');
$User = getUserById($_COOKIE['id']);
$MarksList = getAllUser();
if (isset($_COOKIE['flag'])) {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>Student Marks</title>
    <script src="../Script/StudentMarksSearch(script).js"></script>
  </head>

  <body>
    <table border="1" cellspacing="0" width="80%">
      <?php include("header.php") ?>
      <tr>


        <td width="250px">
          <div id="sidebar">
            <ul>
              <li><a href="StudentListMarks.php">Student Marks</a></li>
              <li><a href="../Controller/Logout.php">Logout</a></li>
            </ul>
          </div>
        </td>

        </td>
        <td align="center">
          <fieldset>
            <legend class="textlegend">STUDENT MARKS LIST</legend>
            <form class="" action="" method="post">
              <center>
                <b>Find Student Marks:</b><input type="text" name="name" id="name">
                <input type="button" name="" value="Find" onclick="ajax()">
              </center>
              <div id="myh1" class="">
                <br>
                <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
                    <td>Subject</td>
                    <td>Roll</td>
                    <td>Marks</td>
								    
                    <td>Marks Delete</td>
								</tr>";
                for ($i = 0; $i < count($MarksList); $i++) {
                  echo "<tr align = 'center'>
								    <td>{$MarksList[$i]['id']}</td>
								    <td>{$MarksList[$i]['name']}</td>
                    <td>{$User['subject']}</td>
                    <td>{$MarksList[$i]['roll']}</td>
                    <td>{$MarksList[$i]['marks']}</td>
								    
                    <td> <a href='DeleteMarks.php?id={$MarksList[$i]['id']}'> Delete </a> </td>
								</tr>";
                }
                echo "</table>";
                ?>
              </div>
            </form>
          </fieldset>
        </td>
        <td align="center"><img height="200px" weight="80px" src="../Resources/grades.svg" alt=""></td>
      </tr>

    </table>
    <?php include("footer.php") ?>
  </body>

  </html>


<?php

} else {
  header('location: adminlogin.php');
}

?>