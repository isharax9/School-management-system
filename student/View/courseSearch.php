<?php

    $name = $_REQUEST['name'];

    $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
    $sql = "select * from course where course_name like '%{$name}%'";
    $result = mysqli_query($con, $sql);

    $response = "<table border=1 width='100%' cellspacing = 0 >
                    <tr align = 'center'>
                    <td>ID</td>
                    <td>Course Name</td>
                    <td>Class</td>
                    <td>Description</td>
                    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $response .=    "<tr align = 'center'>
              <td>{$row['id']}</td>
              <td>{$row['course_name']}</td>
              <td>{$row['class']}</td>
              <td>{$row['description']}</td>
                        </tr>";
    }

    $response .= "</table>";

    echo $response;

?>