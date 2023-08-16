<?php
$title= "Routine";
require_once('../Model/DatabaseConnection.php');
$routine=getAllroutine();
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
          <fieldset>
            <legend>Class Routine</legend>
        <form class="" action="" method="post">
        <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>Day</td>
                    <td>10:00-11:00</td>
                    <td>11:00-12:00</td>
                    <td>12:00-01:00</td>
                    <td>01:00-02:00</td>
                    <td>02:00-03:00</td>
					<td>03:00-04:00</td>
                </tr>";
                for($i = 0; $i<count($routine); $i++){
                    echo "<tr align = 'center'>
                    <td>{$routine[$i]['day']}</td>
                    <td>{$routine[$i]['10:00-11:00']}</td>
                    <td>{$routine[$i]['11:00-12:00']}</td>
                    <td>{$routine[$i]['12:00-01:00']}</td>
                    <td>{$routine[$i]['01:00-02:00']}</td>
                    <td>{$routine[$i]['02:00-03:00']}</td>
					<td>{$routine[$i]['03:00-04:00']}</td>
                    
                </tr>";
                }
                echo "</table>";
                ?>

        </form>
        </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>