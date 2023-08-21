<?php
	$title= "Update Notice";
	$js = "../Script/noticeVal.js";
	include('header.php');
	include_once('../model/noticeModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
<div id="sidebar" class="">
                <ul>
                  <li><a href="postNotice.php">Notice</a></li>
                  <li><a href="viewNotice.php">View Notice</a></li>
                </ul>
							</div>
              </td>
              <td align="center">
                <form id="inform" action="../controller/updateCheckNotice.php" onsubmit="return validation()" method="post">

                  <fieldset >
                    <legend class="textlegend">Notice</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
														<center>
														<div id="error_messege">
														</div>
													</center>
												</tr>
                        <tr>
                          <td>
                            <textarea id="notice" name="notice" rows="8" cols="80" placeholder="Enter notice Here"><?php echo $updatemyinfo['notice']; ?></textarea>
                          </td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="update" value="Update">
                    </center>
                  </fieldset>

            </td>
            </tr>
            </table>
            </td>
            </tr>




            <?php include('footer.php'); ?>
