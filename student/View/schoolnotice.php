<?php
$title= "School Notice";
require_once('../Model/DatabaseConnection.php');
$noticeList=getAllschoolnotice();
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
            <form method="post" action="">
                <fieldset>
                    <legend>School Notice</legend>
                    
       
            <?php
                echo "<table  width='100%' cellspacing = 0  >
                <tr align = 'center'>
                 
                    
                </tr>";
                for($i = 0; $i<count($noticeList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$noticeList[$i]['notice']}</td>
                    <td>(Time: {$noticeList[$i]['time']})</td>
                 
                </tr>";
                }
                echo "</table>";
                ?>
                </fieldset>
            </form>
        </td>
      </tr>
      <?php include('footer.php'); ?>