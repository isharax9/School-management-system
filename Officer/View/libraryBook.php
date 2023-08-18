<?php
	$title= "Library Book";
	$js = "../script/BookSearch.js";
	include('header.php');
	include_once('../model/bookModel.php');
	$UsersList = allUserList();
?>
<div id="sidebar" class="">
                <ul>
                  <li><a href="libraryBook.php">Library Book list</a></li>
                </ul>
							</div>
              </td>
              <td>
                <center><h2  >Library Book list</h2>
								<input type="text" name="name" id="name" onkeyup="ajax()" />
								<input type="button" name="" value="Search">
								<!-- <div id="result">

								</div> -->
								</center>
								<br>
								<div id="myh1" class="">
									<?php
									echo "<table  border = 1 width='100%' cellspacing = 0  >
									<tr align = 'center'>
											<td>ISBN</td>
											<td>Title</td>
											<td>Author</td>
											<td>Edition</td>
											<td>Categories</td>
											<td>Book Copy</td>
									</tr>";
									for($i = 0; $i<count($UsersList); $i++){
											echo "<tr align = 'center'>
											<td>{$UsersList[$i]['isbn']}</td>
											<td>{$UsersList[$i]['title']}</td>
											<td>{$UsersList[$i]['author']}</td>
											<td>{$UsersList[$i]['edition']}</td>
											<td>{$UsersList[$i]['categories']}</td>
											<td>{$UsersList[$i]['bookcopy']}</td>
									</tr>";
									}
									echo "</table>";
									?>
								</div>

							</td>
            </tr>
          </table>
        </td>
      </tr>

<?php include('footer.php'); ?>
