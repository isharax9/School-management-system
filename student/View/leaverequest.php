<?php
$title= "Request for leave";
$javascript = "../Script/leaveval.js";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?> 
        <td>
            <fieldset>
                <legend>Request for leave </legend>
            <form class="" action="../Controller/leaveCheck.php" onsubmit="return val()" method="post">
               <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value="<?php echo $viemyinfo['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $viemyinfo['name']; ?>"> </td>
                </tr>
                <tr>
                    <td>Leave From</td>
                    <td><input type="date" id="leave_from" name="leave_from" value=""> </td>
                </tr>
                <tr>
                    <td>Leave To</td>
                    <td><input type="date" id="leave_to" name="leave_to" value=""> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit"> 
                        <a href="viewleaverequest.php">View Leave Request</a>
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
        </td>
      </tr>

      <?php include('footer.php'); ?>