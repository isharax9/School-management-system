<?php
$title= "Issue Book History";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viewhistory = getissuedbook($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?> 
<td>
            <fieldset>
                <legend>Issue Book History</legend>
            <form class="" action="" method="post"> 
               <table>

               <tr>
                <td>ID</td> 
                <td>:</td>
                <td><?php echo $viewhistory['id']; ?></td>
               </tr>

               <tr>
                <td>Book Name</td> 
                <td>:</td>
                <td><?php echo $viewhistory['title']; ?></td>
               </tr>

               <tr>
                <td>Issue Date</td> 
                <td>:</td>
                <td><?php echo $viewhistory['issuesdate']; ?></td>
               </tr>
               <tr>
                <td>Return Date</td> 
                <td>:</td>
                <td><?php echo $viewhistory['returndate']; ?></td>
               </tr>
               <tr>
                <td>Fine</td> 
                <td>:</td>
                <td><?php echo $viewhistory['fine']; ?></td>
               </tr>

               </table>
               
            </form>
            </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>