<?php
$title = "School Notice";
require_once('../Model/DatabaseConnection.php');
$noticeList = getAllschoolnotice();
include('header.php');
?>

<?php include('sideBar.php'); ?>
<td align="center">
    <form method="post" action="">
        <fieldset>
            <legend class="textlegend">School Notice</legend>


            <?php
            echo "<table  width='100%' cellspacing=1 border=1 >
                <tr align = 'center'>
                 
                    
                </tr>";
            for ($i = 0; $i < count($noticeList); $i++) {
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
<td align="center" ><img height="250px" weight="50%" src="../Resources/notice.svg"></td>

</tr>
<?php include('footer.php'); ?>