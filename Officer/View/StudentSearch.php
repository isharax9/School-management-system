<?php



 $name = $_REQUEST['name'];

 $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
 $sql = "select * from student where id like '%{$name}%'";
 $result = mysqli_query($con, $sql);

 $response = "<table border=1 width='100%' cellspacing = 0 >
         <tr align = 'center'>
           <td>Id</td>
           <td>Name</td>
           <td>Email</td>
           <td>Mobile</td>
           <td>Gender</td>
           <td>DOB</td>
           <td>Present Address</td>
           <td>Class</td>
           <td>Section</td>
           <td>Roll</td>
           <td>Action</td>
         </tr>";

 while ($row = mysqli_fetch_assoc($result)) {
   $response .= 	"<tr align = 'center'>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['mobile']}</td>
              <td>{$row['gender']}</td>
              <td>{$row['dob']}</td>
              <td>{$row['p_address']}</td>
              <td>{$row['class']}</td>
              <td>{$row['section']}</td>
              <td>{$row['roll']}</td>
              <td> <a href='editStudent.php?id={$row['id']}'> Edit </a> | <a href='deleteStudent.php?id={$row['id']}'> Delete </a>  </td>
           </tr>";
 }

 $response .= "</table>";

 echo $response;

?>
