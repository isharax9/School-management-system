<?php
$title= "View Leave Request";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viewmyleave = getleavebyid($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?> 
        <td align="center">
            <fieldset>
                <legend class="textlegend">View Leave Request</legend>
            <form class="" action="" method="post"> 
               <table>


               <tr>
                <td>Name</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['name']; ?></td>
               </tr>

               <tr>
                <td>ID</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['id']; ?></td>
               </tr>

               <tr>
                <td>Leave From</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['leave_from']; ?></td>
               </tr>

               <tr>
                <td>Leave To</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['leave_to']; ?></td>
               </tr>

               
               <tr>
                <td>Status</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['action']; ?></td>
               </tr>

               </table>
               
            </form>
            </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>