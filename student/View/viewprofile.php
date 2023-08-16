<?php
$title= "View Profile";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>

<?php include('sideBar.php'); ?> 
        <td>
            <fieldset>
                <legend>MY PROFILE</legend>
            <form class="" action="" method="post"> 
               <table>
               <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $viemyinfo['name']; ?></td>
               </tr>

               <tr>
                <td>Email</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['email']; ?></td>
               </tr>

               <tr>
                <td>Mobile No</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['mobile']; ?></td>
               </tr>
              
               <tr>
                <td>Student Id</td> 
                <td>:</td>
                <td> <?php echo $viemyinfo['id']; ?></td>
               </tr>

               <tr>
                <td>Gender</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['gender']; ?></td>
               </tr>


               <tr>
                <td>Date of Birth</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['dob']; ?></td>
               </tr>

               <tr>
                <td>Present Address</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['p_address']; ?></td>
               </tr>

               <tr>
                <td>Class</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['class']; ?></td>
               </tr>

               
               
               <tr>
                <td>Section</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['section']; ?></td>
               </tr>

            
               <tr>
                <td>Roll No</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['roll']; ?></td>
               </tr>

               
               
               </table>
               
            </form>
            </fieldset>
            <a href="edit.php">Edit</a>
        </td>
      </tr>
      <?php include('footer.php'); ?>