<?php
$title= "Course Details";
$javascript = "../Script/courseSearch.js";
require_once('../Model/DatabaseConnection.php');
$courseList=getAllcourse();
include('header.php');
?>
 
<?php include('sideBar.php'); ?> 
        <td align="center">
            <legend class="textlegend">Course Details</legend>
            <center>
                  <b>Find Course Info:</b><input type="text" onkeyup="ajax()" name="name" id="name">
                  <input type="button" name="" value="Find">
                </center>
          <div id="myh1" class="">
                  <br>
            <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>ID</td>
                    <td>Course Name</td>
                    <td>Class</td>
                    <td>Description</td>
                </tr>";
                for($i = 0; $i<count($courseList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$courseList[$i]['id']}</td>
                    <td>{$courseList[$i]['course_name']}</td>
                    <td>{$courseList[$i]['class']}</td>
                    <td>{$courseList[$i]['description']}</td>
                </tr>";
                }
                echo "</table>";
                ?>
                </div>
        </td>
      </tr>

      <?php include('footer.php'); ?>