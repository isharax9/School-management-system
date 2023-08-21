<?php
$title = "Download Assignment";
session_start();
if (isset($_COOKIE['flag'])) {
?>


    <!DOCTYPE html>
    <html>



    <body>
        <table border="1" cellspacing="0" width="80%">
            <?php include("TeacherHeader.php") ?>
            <tr>


                <td width="270px">
                    <div id="sidebar">
                        <ul>
                            <li><a href="TeacherDashboard.php">Dashboard</a></li>
                            <li><a href="ViewProfile.php">View Profile</a></li>
                            <li><a href="StudentList.php">View Student's Profile</a></li>
                            <li><a href="UploadAssignment.php">Add Assignment</a></li>
                            <li><a href="UploadNotes.php">Add Lesson Notes</a></li>
                            <li><a href="ViewUploadedNotes(Student).php">View Answer Sheets</a></li>
                            <li><a href="assignmentDashboard.php">Download Answer Sheets</a></li>
                            <li><a href="NoticeBoard.php">Student Notices</a></li>
                            <li><a href="ViewSchoolNotice.php">View Public Notices</a></li>
                            <li><a href="StudentListMarks.php">Student Marks</a></li>
                            <li><a href="LeaveRequest.php">Student Leave Request</a></li>
                            <li><a href="ChangePass.php">Reset Password</a></li>
                            <li><a href="../Controller/Logout.php">Logout</a></li>
                        </ul>
                    </div>
                </td>

                <td>
                    <?php $assignments = [
                        ['title' => 'Assignment 1', 'filename' => 'assignment1.pdf'],
                        ['title' => 'Assignment 2', 'filename' => 'assignment2.pdf']
                        // Add more assignments here
                    ]; ?>

                    <legend class="textlegend">Download Answer Sheets </legend>
                    <ul>
                        <?php foreach ($assignments as $assignment) : ?>
                            <li>
                                <strong><?php echo $assignment['title']; ?></strong><br>
                                <a href="download.php?filename=<?php echo $assignment['filename']; ?>">Download</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </td>

                </td>


        </table>
        <?php include("TeacherFooter.php") ?>
    </body>

    </html>


<?php

} else {
    header('location: LoginPage.php');
}

?>