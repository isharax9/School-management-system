<?php
$title= "Teacher Notice";
include('header.php');
require_once('../model/DatabaseConnection.php');
$GetNotice = getAllNotice();
?>

<?php include('sideBar.php'); ?> 
<td>
                <center><h2>Teacher Notice</h2></center>

								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    
								    <td>Notice</td>
								    <td>Time</td>
								    
								</tr>";
								for($i = 0; $i<count($GetNotice); $i++){
								    echo "<tr align = 'center'>
								    <td>{$GetNotice[$i]['notice']}</td>
								    <td>{$GetNotice[$i]['time']}</td>
								    
								    
								</tr>";
								}
								echo "</table>";
								?>


              </td>
            </tr>
         
      <?php include('footer.php'); ?>