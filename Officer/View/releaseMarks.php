<?php
$title = "Release marks";
include("header.php");
require_once('../Model/DatabaseConnection.php');
$User = getUserById($_COOKIE['id']);
$MarksList = getAllUser();
if (isset($_COOKIE['flag'])) {
?>


    <script src="../Script/StudentMarksSearch(script).js"></script>







        <div id="sidebar">

            <ul>
                <li><a href="addStudent.php">Add Student</a></li>
                <li><a href="viewStudent.php">View Student</a></li>
                <li><a href="editrequestlist.php">Edit Request</a></li>
                <li><a href="dashboard.php">Dashbord</a></li>
                <li><a href="../Controller/logout.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </td>

    </td>
    <td align="center">
        <fieldset>
            <legend class="textlegend">STUDENT MARKS LIST</legend>
            <form class="" action="" method="post">
                <center>
                    <b>Enter Student Name:</b><input type="text" name="name" id="name">
                    <input type="button" name="" value="Find" onclick="ajax()">
                </center>
                <div id="myh1" class="">
                    <br>
                    <?php
                    echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
                    <td>Subject</td>
                    <td>Roll</td>
                    <td>Marks</td>
								    <td>Marks Update</td>
                    <td>Marks Delete</td>
								</tr>";
                    for ($i = 0; $i < count($MarksList); $i++) {
                        echo "<tr align = 'center'>
								    <td>{$MarksList[$i]['id']}</td>
								    <td>{$MarksList[$i]['name']}</td>
                    
                    <td>{$MarksList[$i]['roll']}</td>
                    <td>{$MarksList[$i]['marks']}</td>
								    <td> <a href='Marks.php?id={$MarksList[$i]['id']}'> Update </a></td>
                    <td> <a href='DeleteMarks.php?id={$MarksList[$i]['id']}'> Delete </a> </td>
								</tr>";
                    }
                    echo "</table>";
                    ?>
                </div>
            </form>
        </fieldset>
    </td>
    <td align="center"><img height="300px" weight="80px" src="../Resources/grades.svg" alt=""></td>
    </tr>

    </table>
    <?php include("footer.php") ?>
    </body>

    </html>


<?php

} else {
    header('location: LoginPage.php');
}

?>