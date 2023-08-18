<?php
	$title= "notice";
	$js = "../Script/noticeVal.js";
	include('header.php');
?>
<div id="sidebar" class="">
                <ul>
                  <li><a href="postNotice.php">Notice</a></li>
									<li><a href="viewNotice.php">View Notice</a></li>
                </ul>
							</div>
              </td>
              <td>
                <form  class="" id="inform" action="../Controller/postCheckNotice.php" onsubmit="return validation()" method="post">
                  <fieldset align="center" >
                    <legend>Notice</legend>
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
                            <textarea id="notice" name="notice" rows="8" cols="80" placeholder="Enter notice Here"></textarea>
                          </td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="POST">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>



<?php include('footer.php'); ?>
