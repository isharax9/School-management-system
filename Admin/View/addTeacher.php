<?php
$title = "add Teacher";
$js = "../Script/addValidationTeacher.js";
$style = "../Style/regester.css";
include('header.php');

?>
<div id="sidebar" class="">
  <ul>
    <li><a href="addTeacher.php">Add Teacher</a></li>
    <li><a href="viewTeacher.php">View Teacher</a></li>
    <li><a href="dashboard.php">Dashbord</a></li>
    <li><a href="../Controller/logout.php">Logout</a></li>
  </ul>

</div>
</td>

<td>
  <form class="" id="myform" action="../Controller/regCheckTeacher.php" method="post" onsubmit="return validation()">
    <fieldset align="center">
      <legend class="textlegend">Teacher Registration</legend>
      <table align="center">
        <tr>
          <td colspan="2">
            <center>
              <div id="error_messege">
              </div>
            </center>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" id="name" name="name" placeholder="Enter Full Name"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" id="email" name="email" value=""></td>
        </tr>
        <tr>
          <td>Mobile No</td>
          <td><input type="text" id="mobile" name="mobile" value=""></td>
        </tr>
        <tr>
          <td>Id</td>
          <td><input type="text" id="id" name="id" value=""></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" id="password" name="password" value=""></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" id="repass" name="repass" value=""></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" id="gender" name="gender" value="male">Male
            <input type="radio" id="gender" name="gender" value="female">Female
            <input type="radio" id="gender" name="gender" value="other">Other
          </td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td><input type="date" id="dob" name="dob" value=""></td>
        </tr>
        <tr>
          <td>Subject</td>
          <td><select id="subject" name="subject">
              <option value="Web Programming">Web Programming</option>
              <option value="IELTS">IELTS</option>
              <option value="CombinedMaths">CombinedMaths</option>
              <option value="Physics">Physics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="ReactNative">ReactNative</option>
            </select>
          </td>
        </tr>
      </table>
      <hr>
      <center>
        <input type="submit" id="" name="submit" value="Submit">
        <input type="reset" id="" name="reset" value="Reset">
      </center>
    </fieldset>
  </form>
</td>
</tr>
</table>
</td>
</tr>
<?php include('footer.php'); ?>