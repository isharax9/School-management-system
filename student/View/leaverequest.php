<?php
$title = "Request for leave";
$javascript = "../Script/leaveval.js";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?>
<td align="right">
    <fieldset>
        <legend class="textlegend">Study leave Request  </legend>
        <form class="" action="../Controller/leaveCheck.php" onsubmit="return val()" method="post">
            <table>
            <tr>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"  value="<?php echo $viemyinfo['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"  value="<?php echo $viemyinfo['name']; ?>"> </td>
                </tr>
                <tr>
                    <td>Leave From</td>
                    <td><input type="date" id="leave_from" name="leave_from" value=""> </td>
                </tr>
                <tr>
                    <td>Leave To</td>
                    <td><input type="date" id="leave_to" name="leave_to" value=""> </td>
                </tr>
            </tr>
                <tr>
                    <td></td>
                    

                    <td>
                        <br>
                        <hr>
                        <div align="center">
                            <input type="submit" name="submit" value="Submit"><br><br>
                            <a href="viewleaverequest.php" class="btn btn-outline-danger " role="button" >View My Latest Leave Request</a>
                        </div>
                    </td>


                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                            <div id="error_messege">
                            </div>
                        </center>
                    </td>
                </tr>

            </table>

        </form>
    </fieldset>
</td><td align="center" ><img height="350px" weight="50%" src="../Resources/studyleave.png"></td>
</tr>

<?php include('footer.php'); ?>