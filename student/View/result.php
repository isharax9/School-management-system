<?php
$title= "Result";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viewmyresult = getUserbyid($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?> 
        <td align="right">
            <fieldset>
                <legend class="textlegend">MY Result</legend>
            <form class="" action="" method="post"> 
               <table>
               <tr>
                <td>Name</td> 
                <td>:</td>
                <td><?php echo $viewmyresult['name']; ?></td>
               </tr>

               <tr>
                <td>Marks</td> 
                <td>:</td>
                <td><?php echo $viewmyresult['marks']; ?></td>
               </tr>

               </table>
               
            </form>
            </fieldset>
        </td><td align="center" ><img height="450px" weight="50%" src="../Resources/marks.svg"></td>
      </tr>

      <?php include('footer.php'); ?>